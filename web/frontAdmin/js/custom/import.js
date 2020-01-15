(function($) {
    'use strict';
    $(".default-flatpickr").flatpickr({

        altInput: true,
        altFormat: "d/m/Y",
        // altFormat: "F j, Y",
        dateFormat: "Y-m-d",
    });

    $(".date-range-flatpickr").flatpickr({
        defaultDate: new Date(),
        dateFormat: "d-m-Y",
        mode: "range"
    });





})(jQuery);
