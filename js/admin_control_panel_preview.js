$(document).ready(function() {
  console.log('tuesday');

  $('#admin').hover(function() {
    $(this).animate({
      left: '927px',
      'background-color': 'darkorange'
    }, 'fast');
  }, function () {
    $(this).animate({
      left: '860px',
      'background-color': 'ghostwhite'
    }, 'fast');
  }
  );

  // stacko: 
  // /questions/3841100/write-content-to-new-window-with-jquery
  // http://jsfiddle.net/ypAsY/
  $('#admin').click(function(event) {
    var w = window.open();
    var html = $('#etoc').html();
    $(w.document.body).html(html);
  });
});
