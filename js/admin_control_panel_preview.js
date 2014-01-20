$(document).ready(function() {
  console.log('tuesday');

  $('.admin').hover(function(event) {
    console.log($(this));
    $(this).css('background-color', 'darkorange');
    $(this).animate({
      left: '778px'
    }, 'fast');
  }, function () {
    $(this).css('background-color', 'ghostwhite');
    $(this).animate({
      left: '715px'
    }, 'fast');
  }
  );

  // stacko: 
  // /questions/3841100/write-content-to-new-window-with-jquery
  // http://jsfiddle.net/ypAsY/
  $('.admin').click(function(event) {
    var w = window.open();
    var html = $('#etoc').html();
    $(w.document.body).html(html);
  });
});
