/* global yii, bootbox */
yii.allowAction = function ($e) {
    var message = $e.data('confirm');
    return message === undefined || yii.confirm(message, $e);
};
// --- Delete action (bootbox) ---
yii.confirm = function (message, ok, cancel) {
    bootbox.confirm({
        title: "Confirmar ação",
        message: message,
        buttons: {
            confirm: {
                label: "OK"
            },
            cancel: {
                label: "Cancelar"
            }
        },
        callback: function (confirmed) {
            if (confirmed) {
                !ok || ok();
            } else {
                !cancel || cancel();
            }
        }
    });
    // confirm will always return false on the first call
    // to cancel click handler
    return false;
};
