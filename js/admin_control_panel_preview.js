$(document).ready(function() {
  console.log('tuesday');

  $('.admin').hover(function(event) {
    //console.log($(this)[0].id);
    //console.log($(this).prop('id'));
    //$(this).css('background-color', 'darkorange');
    $(this).animate({
      left: '778px'
    }, 'fast');
  }, function () {
    //$(this).css('background-color', 'ghostwhite');
    $(this).animate({
      left: '715px'
    }, 'fast');
  }
  );

  // stacko: 
  // /questions/3841100/write-content-to-new-window-with-jquery
  // http://jsfiddle.net/ypAsY/
  $('.admin').click(function(event) {
    //console.log(event.target.id);
    if ($(this)[0].id == 'preview') {
      var w = window.open();
      var html = $('#etoc').html();
      $(w.document.body).html(html);
    } else if ($(this)[0].id == 'code') {
      // populate the page with the html code
      var w = window.open();
      var html = $('#etoc').html();
      $(w.document.body).html('<div id="html_code"></div>');
      w.document.getElementById('html_code').appendChild(document.createElement('pre'));
      w.document.body.getElementsByTagName('pre')[0].appendChild(document.createTextNode(html));

      //note: look here for doctype to prepend:
      //http://www.campaignmonitor.com/blog/post/3317/correct-doctype-to-use-in-html-email/ 
    }
  });

});
