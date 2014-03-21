$(document).ready(function() {
  $(window).keydown(function(event) {
    if (event.keyCode == 13) {
      event.preventDefault();
    }
  });

  $('#peer_photo_file').focus(function(event) {
    $('.validate').removeClass('error success').fadeOut();
  });

  $('#peer_photo_file').blur(function(event) {
    // clear error, success classes
    $('.validate').removeClass('error');
    $('.validate').removeClass('success');

    // check to see if file really exists
    $.ajax('/form/p_meta_verify/' + $(this).val(), {
      beforeSend: function() {
        // put up the spinner while we're waiting
        $('.validate').toggleClass('ajax_load').fadeIn();
      },
      success: function(data) { // found it!
        if (data) {
          $('.validate')
            .toggleClass('success ajax_load')
            .html('<p>Found it!</p>')
            .fadeIn();
          document.getElementsByClassName('btn')[0].disabled = false;
          //$("input[type='text']").prop('disabled', true);
          $("input[type='text']").prop('readonly', true);
        } else { // couldn't find it!
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

  // stackoj
  ///questions/13941055/add-a-string-of-text-into-an-input-field-when-user-clicks-a-button

});
