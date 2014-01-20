$(document).ready(function() {
  $(window).keydown(function(event) {
    if (event.keyCode == 13) {
      event.preventDefault();
    }
  });

  //$('#peer_photo_file').focus(function(event) {
    //$('.error').to
  //});

  $('#peer_photo_file').blur(function(event) {
    // clear error, success classes
    $('.validate').removeClass('error');
    $('.validate').removeClass('success');

    // check to see if file really exists
    $.ajax('/form/p_meta_verify/' + $(this).val(), {
      beforeSend: function() {
        $('.validate').toggleClass('ajax_load');
      },
      success: function(response) { // yep!
        //$('.validate').toggleClass('ajax_load');
        if (response == 1) {
          $('.validate')
            .toggleClass('success')
            .toggleClass('ajax_load')
            .html('<p>Found it!</p>');
          $("input[type='submit']").attr('disabled', 'false');
        } else { // nope!
          $('.validate')
            .toggleClass('error')
            .toggleClass('ajax_load')
            .html('<p>Not found</p>');
        }
      },
      error: function(response) {
        $('.validate').toggleClass('ajax_load');
      }
    });
    //$('.error').html('Will there be an error here?');
  });

  //http://stackoverflow.com/questions/13941055/add-a-string-of-text-into-an-input-field-when-user-clicks-a-button


});
