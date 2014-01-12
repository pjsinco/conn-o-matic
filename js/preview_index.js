$(document).ready(function() {
  console.log('hiya');

  $('#lead_in_edit').dialog({
    autoOpen: false,
    height: 400,
    width: 450,
    modal: true
    
  });

  $('#lead_in').click(function() {
    console.log('clicked lead_in');
    $('#lead_in_edit').dialog('open');
  });



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
