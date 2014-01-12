$(document).ready(function() {
  console.log('hiya');

  // prep the form to be opened as a dialog modal
  $('.dialog-form').dialog({
    autoOpen: false,
    height: 400,
    width: 450,
    modal: true
  });


  /*
   * Edit lead_in
   */
  $('#lead_in').click(function() {

    // grab the lead_in text and put it in the textarea
    var text = $('#lead_in > p').html().trim();
    $('#lead_in_text').val(text);

    // open the form as a dialog modal
    $('#lead_in_edit').dialog('open');
  });


  /*
   * Edit kicker
   */
  $('#kicker').click(function() {

    // grab the lead_in text and put it in the textarea
    var text = $('#kicker > p').html().trim();
    $('#kicker_text').val(text);

    // open the form as a dialog modal
    $('#kicker_edit').dialog('open');
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
