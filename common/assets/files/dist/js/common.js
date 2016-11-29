/* global application, toastr, Inputmask */
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

Inputmask.extendAliases({
    reais: {
        alias: 'currency',
        digits: 2,
        groupSeparator: '.',
        prefix: 'R$ ',
        radixPoint: ','
    },
    dec: {
        alias: 'currency',
        clearMaskOnLostFocus: true,
        digits: 2,
        groupSeparator: '.',
        prefix: '',
        radixPoint: ','
    }
});

var common = common || {};

common.datepicker = function (input) {
    return $(input).datetimepicker({
        widgetPositioning: {
            horizontal: 'left'
        },
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-arrow-up',
            down: 'fa fa-arrow-down',
            previous: 'fa fa-arrow-left',
            next: 'fa fa-arrow-right',
            today: 'fa fa-calendar-check-o',
            clear: 'fa fa-trash',
            close: 'fa fa-times'
        },
        format: 'DD/MM/YYYY'
    });
};

common.timepicker = function (input) {
    return $(input).datetimepicker({
        widgetPositioning: {
            horizontal: 'left'
        },
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-arrow-up',
            down: 'fa fa-arrow-down',
            previous: 'fa fa-arrow-left',
            next: 'fa fa-arrow-right',
            today: 'fa fa-calendar-check-o',
            clear: 'fa fa-trash',
            close: 'fa fa-times'
        },
        format: 'HH:mm'
    });
};

common.datetimepicker = function (input) {
    return $(input).datetimepicker({
        widgetPositioning: {
            horizontal: 'left'
        },
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-arrow-up',
            down: 'fa fa-arrow-down',
            previous: 'fa fa-arrow-left',
            next: 'fa fa-arrow-right',
            today: 'fa fa-calendar-check-o',
            clear: 'fa fa-trash',
            close: 'fa fa-times'
        },
        format: 'DD/MM/YYYY HH:mm'
    });
};

common.decimal = function (input) {
    input.inputmask({alias: 'dec'});
};

common.currency = function (input) {
    input.inputmask({alias: 'reais'});
};

common.init = function () {
    // date / time controls
    common.datepicker($('.date'));
    common.timepicker($('.time'));
    common.datetimepicker($('.datetime'));
    // numeric controls
    common.decimal($('.decimal'));
    common.currency($('.currency'));
};


(function ($) {
    $(document).ready(function () {
        common.init();
    });
})(jQuery);