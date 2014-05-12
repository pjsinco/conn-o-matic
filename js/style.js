$(document).ready(function() {

  var leadInATag = {
    color: '#fdc578'
  }
  
  var leadInPTag = {
    'font-size'     : '14px',
    'color'         : '#fdc578',
    'line-height'   : '22px',
    'mso-line-height-rule': 'exactly',
    'margin-top'    : '10px',
    'margin-right'  : '20px',
    'margin-bottom' : '10px',
    'margin-left'   : '20px',
    'text-align'    : 'left'
  };

  var leadInULTag = {
    'font-size'    : '14px',
    'color'        : '#fdc578',
    'mso-line-height-rule': 'exactly',
    'line-height'  : '22px',
    'margin-top'   : '10px',
    'margin-right' : '20px',
    'margin-bottom': '10px'
  };

  var kickerPTag = {
    'font-size'     : '14px',
    'color'         : '#111f43',
    'mso-line-height-rule': 'exactly',
    'line-height'   : '18px',
    'font-weight'   : 'bold',
    'margin-top'    : '3px',
    'margin-right'  : '20px',
    'margin-bottom' : '6px',
    'margin-left'   : '20px',
    'text-align'    : 'left'
  };

  var kickerATag = {
    'color': '#111f43'
  };

  var mainH1Tag = {
    'color'         : '#111f4c',
    'font-size'     : '15px',
    'line-height'   : '20px',
    'margin-bottom' : '10px',
    'margin-left'   : '20px',
    'margin-right'  : '20px',
    'margin-top'    : '10px'
  };

  var mainPTag = {
    'font-size'     : '13px',
    'color'         : '#333333',
    'line-height'   : '17px',
    'mso-line-height-rule': 'exactly',
    'margin-top'    : '0px',
    'margin-right'  : '20px',
    'margin-bottom' : '10px',
    'margin-left'   : '20px',
    'text-align'    : 'left'
  };

  var mainULTag = {
    'font-size'    : '13px',
    'color'        : '#333333',
    'mso-line-height-rule': 'exactly',
    'line-height'  : '17px',
    'margin-top'   : '0px',
    'margin-right' : '20px'
  };
  
  var mainATag = {
    'color' : '#111f43'
  };

//  var pollH2Tag = {
//    'color'         : '#111f43',
//    'font-size'     : '15px',
//    'margin-top'    : '10px',
//    'margin-right'  : '20px',
//    'margin-bottom' : '3px',
//    'margin-left'  : '15px'
//  };

  var pollPTag = {
    'font-size'     : '13px',
    'color'         : '#333333',
    'line-height'   : '17px',
    'mso-line-height-rule': 'exactly',
    'margin-top'    : '0px',
    'margin-right'  : '20px',
    'margin-bottom' : '10px',
    'margin-left'   : '15px',
    'text-align'    : 'left'
  };

  var pollATag = {
    'color'         : 'rgb(17, 31, 67)'
  };
  
  var peerH2Tag = {
    'margin-bottom' : '10px',
    'font-size'     : '17px',
    'color'         : '#111f43',
    'margin-top'    : '3px'
  };

  var peerH3Tag = {
    'margin-bottom': '0px', 
    'font-size': '14px', 
    'color': '#913a20',
    'margin-top': '10px',
    'text-transform': 'uppercase'
  };

  var peerPTag = {
    'font-size'     : '13px',
    'color'         : '#333333',
    'line-height'   : '17px',
    'mso-line-height-rule': 'exactly',
    'margin-top'    : '0',
    'margin-right'  : '0',
    'margin-bottom' : '0',
    'margin-left'   : '0',
    'text-align'    : 'left'
  };

  var peerATag = {
    'color' : '#111f43'
  }

  // style lead-in a tags
  $('#lead_in a').css(leadInATag);

  // style lead-in a tags
  $('#lead_in p').css(leadInPTag);

  // style lead-in ul tags
  $('#lead_in ul').css(leadInULTag);

  // style kicker p tags
  $('#main_body p').css(leadInPTag).attr({
    'class': 'main_body_text_to_edit',
    //'class': 'selectable'
  });

  // style kicker p tags
  $('#kicker p').css(kickerPTag);

  // style kicker a tags
  $('#kicker a').css(kickerATag);

  // style main-body h2 tag
  $('#main_body h1').css(mainH1Tag);

  // style main-body p tags
  $('#main_body p').css(mainPTag);

  // style main-body ul tags
  $('#main_body ul').css(mainULTag);
  
  // style main-body a tags
  $('#main_body a').css(mainATag);

  // style poll p tag
  $('#poll p').css(pollPTag);

  // style poll p tag
  $('#poll a').css(pollATag);

  // style poll h2 tag
  //$('#poll h2').css(pollH2Tag);
  
  // style peer h2 tag (name)
  $('#peer_title h3').css(peerH3Tag);

  // style peer h2 tag (name)
  $('#peer_name h2').css(peerH2Tag);

  // style peer p tag in response
  $('.peer_response p').css(peerPTag);

  // style peer a tags
  $('.peer_response a').css(peerATag);

});
