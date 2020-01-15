(function($) {
  'use strict';
  $(function() {
    $('#order-listing').DataTable({
      "aLengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
      "iDisplayLength": 5
    });
    $('.defaultDataTable').DataTable({
      "aLengthMenu": [[20, 30, 45, -1], [20, 30, 45, "All"]],
      "iDisplayLength": 5
    });
  });
})(jQuery);
