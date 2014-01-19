$(document).ready(function() {
  $('body').addClass('etoc_create');

  /*
   * *** TESTING AREA ***
   */
  //console.log($('p.heading').next());

  // keep track so we don't ever end up with 0 resources
  var resCount = $('#resources_list').children().length;
  
  // prevent links from working
  $('a').click(function(event) {
    event.preventDefault();
  });


  /*
   * create span elements for res-to-ref mouseover edit icons
   */
  var resEdit = $("<span></span>",
    {
      'id': 'res_edit',
      'class': 'ui-state-default ui-corner-all ui-icon ui-icon-pencil',
      'style': 'display: inline-block; margin-right: 3px'
    });

  var resCreate = $('<span></span>',
    {
      'id': 'res_create',
      'class': 'ui-state-default ui-corner-all ui-icon ui-icon-plus',
      'style': 'display: inline-block; margin-right: 3px'
    });

  var resDelete = $('<span></span>',
    {
      'id': 'res_delete',
      'class': 'ui-state-default ui-corner-all ui-icon ui-icon-close',
      'style': 'display: inline-block; margin-right: 3px'
    });

  // select text in field on focus
  // NOTE: input:text works, but not textarea
  $('textarea, input:text').focus(function() {
    $(this).select();
  });

  // prep the form to be opened as a dialog modal
  $('.dialog-form').dialog({
    autoOpen: false,
    height: 'auto',
    //width: 'auto',
    width: 600,
    modal: true,
    show: {
      effect: 'fade',
      duration: 300
    },
    hide: {
      effect: 'fade',
      duration: 300
    }
  });

  // refresh the page on 'cancel'; 
  // hack for bug that duplicates a form's textarea
  // if a form is canceled and immediately reopened
  $('.dialog-form').bind('dialogbeforeclose', function(event) {
    document.location.reload();
  });

  // provide visual feedback on editable areas
  $('.selectable').hover(
    function() { // mouse in
      $(this).toggleClass('selected');
  });

  /*
   * Edit flag
   */
  $('#connections_flag').click(function(event) {
    
    // local change: make the width of the dialog 'auto'
    $('.dialog-form').dialog('option', 'width', 'auto');
    $('#connections_flag_edit').dialog('open');
  });


  /*
   * Edit date
   */
  $('#connections_edition_flag').click(function() {
    // local change: make the width of the dialog 'auto'
    $('.dialog-form').dialog('option', 'width', 'auto');
    $('#connections_quarter_edit').dialog('open');
  });


  /*
   * Edit lead_in
   */
  $('#lead_in').click(function() {
    // grab the lead_in text and put it in the textarea
    var text = $('#lead_in').html().trim();
    $('#lead_in_text').val(text);
    
    // set up with code editor
    var cm = 
      CodeMirror.fromTextArea(document.getElementById('lead_in_text'), 
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // open the form as a dialog modal
    $('#lead_in_edit').dialog('open');

    // refresh to to get code to show up
    cm.refresh();
  });


  /*
   * Edit kicker
   */
  $('#kicker').click(function() {

    // grab the lead_in text and put it in the textarea
    var text = $('#kicker').html().trim();
    $('#kicker_text').val(text);

    // set up with code editor
    var cm = 
      CodeMirror.fromTextArea(document.getElementById('kicker_text'), {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // open the form as a dialog modal
    $('#kicker_edit').dialog('open');

    // refresh to to get code to show up
    cm.refresh();
  });

  /*
   * Edit headline and main body
   */
  $('#main_body').click(function() {

    // grab the lead_in text and put it in the textarea
    var headline = $('#headline').html().trim();
    $('#headline_text').val(headline);

    // set up textarea with code editor
    var cmHead =
      CodeMirror.fromTextArea(document.getElementById('headline_text'),
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // grab the main_body text and plop in textarea
    var body = $('#body').html().trim();
    $('#main_body_text').val(body);

    // set up textarea with code editor
    var cmBody =
      CodeMirror.fromTextArea(document.getElementById('main_body_text'),
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // open the form as a dialog modal
    $('#main_body_edit').dialog('open');

    cmHead.refresh();
    cmBody.refresh();
  });


  /*
   * Edit poll
   */
  $('#poll').click(function() {
    var pollLink = $(this).find('a').attr('href');
    var pollQ = $('#poll_q').html().trim();

    $('#poll_q_text').val(pollQ);
    $('#poll_link_text').val(pollLink);

    // set up with code editor
    var cm = 
      CodeMirror.fromTextArea(document.getElementById('poll_q_text'), 
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    $('#poll_edit').dialog('open');
    cm.refresh();
  });


  /*
   * Edit resources
   */
  // help from http://jsfiddle.net/2U5TN/1/
  $('#resources_list li').hover(
    function() { // mousein
      $(this)
        .append("<div style='display: inline-block; float: right; '>" 
          + $(resEdit)[0].outerHTML 
          + $(resCreate)[0].outerHTML 
          + (resCount > 1 ? $(resDelete)[0].outerHTML : '')
          + "</div>"
        );
      $('.ui-state-default').hover(function() {
          $(this).toggleClass('ui-state-hover');
      });
      $('.ui-state-default').click(function() {
          $(this).toggleClass('ui-state-active');

          // get the resource id
          var resourceId = $(this).parent().prev().attr('id');
          var resId = resourceId.split('-')[1];
          
          // get the desired action - edit, create or delete
          var action = $(this).attr('id');

          // get the connections id by parsing the page location
          var connId = parseInt(window.location.href.split('/').pop());

          // take the appropriate action
          switch (action) {
            case 'res_edit': // EDIT a res-to-ref
              var text = $(this).parent().prev().text();
              var link = $(this).parent().prev().attr('href');
              $("input[name='id'").val(resId);
              $("input[name='res'").val(text);
              $("input[name='res_link'").val(link);
              $("input[name='conn_id'").val(connId);
              $('#resources_edit').dialog('open');
              break;
            case 'res_create': // CREATE a res-to-ref
              $("input[name='conn_id'").val(connId);
              $("input[name='res'").val('');
              $("input[name='res_link'").val('');
              $('#resources_create').dialog('open');
              break;
            case 'res_delete': // DELETE a res-to-ref
              // confirm deletion
              $('#resources_delete_modal').dialog({
                resizable: false,
                height: 'auto',
                width: 'auto',
                autoOpen: true,
                modal: true,
                buttons: {
                  "Delete this resource": function() {
                    $.ajax({
                      type: 'POST',
                      url: '/form/p_resources_delete/' 
                        + connId + '/' + resId,
                      dataType: text,
                      success: function(response) {
                        // peel off the <li> with the resource
                        $('#' + resourceId).parent().remove();

                        // update # of resources
                        resCount = 
                          $('#resources_list').children().length;
                      }
                    });
                    $(this).dialog('close');
                  },
                  Cancel: function() {
                    $(this).dialog('close');
                  }
                } 
              });
              break;
            default:
          }
      });
      $('#create_res').click(function() {
        $('#resources_edit').dialog('open'); 
      });
      $('#edit_res').click(function() {
        $('#resources_edit').dialog('open'); 
      });
    }, function() { // mouseout
      $(this).find('div').remove(); // remove the edit icons
    }
  );


  /*
   * Edit peer
   */
  $('#peer').click(function() {

    // set up name
    var peerName = $('#peer_name').html().trim();
    $('#peer_name_text').val(peerName);

    // set up with code editor
    var cmName = 
      CodeMirror.fromTextArea(document.getElementById('peer_name_text'), 
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // set up occupation
    var peerOcc = $("#peer_occ").html().trim();
    $('#peer_occ_text').val(peerOcc);

    // set up with code editor
    var cmOcc = 
      CodeMirror.fromTextArea(document.getElementById('peer_occ_text'), 
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // set up school
    var peerSchool = $("#peer_school").html().trim();
    $('#peer_school_text').val(peerSchool);

    // set up with code editor
    var cmSchool = 
      CodeMirror.fromTextArea(document.getElementById('peer_school_text'), 
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // set up involved
    var peerInv =  $('#peer_inv').html().trim();
    $('#peer_inv_text').val(peerInv);

    // set up with code editor
    var cmInv = 
      CodeMirror.fromTextArea(document.getElementById('peer_inv_text'), 
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    // set up reviewing
    var peerRev = $('#peer_rev').html().trim();
    $('#peer_rev_text').val(peerRev);

    // set up with code editor
    var cmRev = 
      CodeMirror.fromTextArea(document.getElementById('peer_rev_text'), 
      {
        mode: {
          name: 'xml',
          htmlMode: true
        }, 
        tabMode: 'indent',
        tabSize: 2,
        lineNumbers: true,
        lineWrapping: true,
        keyMap: 'default',
        theme: 'eclipse'
      });

    //$('#peer_school_text').autocomplete({
      //source: schools
    //});
    
    $('#peer_edit').dialog('open');

    // fresh all code editors so they show up 
    cmName.refresh();
    cmOcc.refresh();
    cmSchool.refresh();
    cmInv.refresh();
    cmRev.refresh();
  });


});
