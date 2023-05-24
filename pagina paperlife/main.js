$(document).ready(function() {
  $('details').on('toggle', function() {
    if (this.open) {
      $('details').not(this).removeAttr('open');
    }
  });
});
