$(document).ready(function() {
  console.log('hiya');

  // prep the form to be opened as a dialog modal
  $('.dialog-form').dialog({
    autoOpen: false,
    height: 400,
    width: 450,
    modal: true
  });

  // provide visual feedback on editable areas
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

  /*
   * Edit headline
   */
  $('#headline').click(function() {
    
    // grab the lead_in text and put it in the textarea
    var text = $(this).html().trim();
    $('#headline_text').val(text);
    
    // open the form as a dialog modal
    $('#headline_edit').dialog('open');
  });

  /*
   * Edit main body
   */

  $('#main_body_text_to_edit').click(function() {
    
    // grab the lead_in text and put it in the textarea
    var text = $('#main_body_text_to_edit').html().trim();
    $('#main_body_text').val(text);
    
    // open the form as a dialog modal
    $('#main_body_edit').dialog('open');
  });

  /*
   * Edit poll
   */
  // todo NEED TO POPULATE LINK FIELD
  $('#poll').click(function() {
    //console.log($(this));
    var text = $(this).html().trim();
    $('#poll_q_text').val(text);

    $('#poll_edit').dialog('open');

  });

  /*
   * Edit peer
   */
  $('#peer').click(function() {
    var peerName = $('#peer_name').html().trim();
    $('#peer_name_text').val(peerName);

    var peerOcc = $('#peer_occ').html().trim();
    $('#peer_occ_text').val(peerOcc);

    var peerSchool = $('#peer_school').html().trim();
    $('#peer_school_text').val(peerSchool);

    var peerInv = $('#peer_inv').html().trim();
    $('#peer_inv_text').val(peerInv);

    var peerRev = $('#peer_rev').html().trim();
    $('#peer_rev_text').val(peerRev);

    $('#peer_edit').dialog('open');
  });


});