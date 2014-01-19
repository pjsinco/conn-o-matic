$(document).ready(function() {
  console.log('tuesday');

  $('#admin').hover(function() {
    $(this).animate({
      left: '927px'
    }, 'fast');
  }, function () {
    $(this).animate({
      left: '860px'
    }, 'fast');
  }
  );

  // stacko: 
  // /questions/3841100/write-content-to-new-window-with-jquery
  // http://jsfiddle.net/ypAsY/
  function openWindow() {
    var w = window.open();
    var html = $('#etoc').html();

    $(w.document.body).html(html);
  }

  $('#admin').click(openWindow);
});
