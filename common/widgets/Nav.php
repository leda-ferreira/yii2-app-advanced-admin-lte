<?php

namespace common\widgets;

use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;

class Nav extends \yii\bootstrap\Nav
{
    /**
     * @var string
     */
    public $iconPrefix;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->dropDownCaret === null) {
            $this->dropDownCaret = Html::tag('i', '', ['class' => 'fa fa-angle-left pull-right']);
        }
        if ($this->iconPrefix === null) {
            $this->iconPrefix = 'fa fa-';
        }

        parent::init();
        Html::removeCssClass($this->options, ['widget' => 'nav']);
        Html::addCssClass($this->options, ['widget' => 'sidebar-menu']);
    }

    /**
     * @inheritdoc
     */
    public function renderItem($item)
    {
        if (is_string($item)) {
            return $item;
        }
        if (!isset($item['label'])) {
            throw new InvalidConfigException("The 'label' option is required.");
        }

        $encodeLabel = ArrayHelper::getValue($item, 'encode', $this->encodeLabels);
        $label = $encodeLabel ? Html::encode($item['label']) : $item['label'];
        $icon = ArrayHelper::remove($item, 'icon');
        if ($icon) {
            $iconOptions = ArrayHelper::getValue($item, 'iconOptions', [
                'class' => 'fa-fw',
                'prefix' => $this->iconPrefix,
            ]);
            $iconOptions['tag'] = 'i';
            $icon = Html::icon($icon, $iconOptions) . ' ';
        }

        $label = $icon . '<span>' . $label . '</span>';
        $options = ArrayHelper::getValue($item, 'options', []);
        $items = ArrayHelper::getValue($item, 'items');
        $url = ArrayHelper::getValue($item, 'url', '#');
        $linkOptions = ArrayHelper::getValue($item, 'linkOptions', []);

        if (isset($item['active'])) {
            $active = ArrayHelper::remove($item, 'active', false);
        } else {
            $active = $this->isItemActive($item);
        }

        if (empty($items)) {
            $items = '';
        } else {
            Html::addCssClass($options, ['widget' => 'treeview']);
            if ($this->dropDownCaret !== '') {
                $label .= ' ' . $this->dropDownCaret;
            }
            if (is_array($items)) {
                if ($this->activateItems) {
                    $items = $this->isChildActive($items, $active);
                }
                $items = $this->renderDropdown($items, $item);
            }
        }

        if ($this->activateItems && $active) {
            Html::addCssClass($options, 'active');
        }

        return Html::tag('li', Html::a($label, $url, $linkOptions) . $items, $options);
    }

    /**
     * @inheritdoc
     */
    protected function renderDropdown($items, $parentItem)
    {
        return NavDropdown::widget([
            'options' => ArrayHelper::getValue($parentItem, 'dropDownOptions', []),
            'items' => $items,
            'encodeLabels' => $this->encodeLabels,
            'clientOptions' => false,
            'view' => $this->getView(),
        ]);
    }
}