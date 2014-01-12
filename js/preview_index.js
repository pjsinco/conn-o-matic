$(document).ready(function() {
  console.log('hiya');

  $('.selectable').hover(
    function() { // mouse in
      $(this).css({
        'opacity': '0.5',
        'cursor': 'pointer'
      });
    }, function() { // mouse out
      $(this).css('opacity', '1.0');
    }
  );

});
