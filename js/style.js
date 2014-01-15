$(document).ready(function() {

  var leadInATag = {
    color: '#fdc578'
  }
  
  var leadInPTag = {
    'font-size': '14px',
    'color': '#fdc578',
    'line-height': '22px',
    'margin-top': '10px',
    'margin-right': '20px',
    'margin-bottom': '10px',
    'margin-left': '20px'
  };

  var kickerPTag = {
    'font-size': '14px',
    'color': '#111f43',
    'line-height': '18px',
    'font-weight': 'bold',
    'margin-top': '3px',
    'margin-right': '20px',
    'margin-bottom': '6px',
    'margin-left': '20px'
  };

  var kickerATag = {
    color: '#111f43'
  };

  var mainH2Tag = {
    color: '#111f4c',
    'font-size': '15px',
    'margin-bottom': '0px',
    'margin-left': '20px',
    'margin-right': '20px',
    'margin-top': '10px'
  };

  var mainPTag = {
    'font-size'     : '13px',
    'color'         : '#333333',
    'line-height'   : '17px',
    'margin-top'    : '0px',
    'margin-right'  : '20px',
    'margin-bottom' : '10px',
    'margin-left'   : '20px'
  };

  var mainULTag = {
  'font-size': '13px', 
  'color': '#333333', 
  'line-height': '17px', 
  'margin-top': '0px', 
  'margin-right': '20px'
  };
  
  var mainATag = {
    'color' : '#111f43'
  };

  //var resATag = {
    //'color': '#111f43'
  //}

  // style lead-in a tags
  $('#lead_in a').css(leadInATag);

  // style lead-in a tags
  $('#lead_in p').css(leadInPTag);

  // style kicker p tags
  $('#main_body p').css(leadInPTag).attr({
    'id': 'main_body_text_to_edit',
    'class': 'selectable'
  });

  // style kicker p tags
  $('#kicker p').css(kickerPTag);

  // style kicker a tags
  $('#kicker a').css(kickerATag);

  // style main-body h2 tag
  $('#main_body h2').css(mainH2Tag);

  // style main-body p tags
  $('#main_body p').css(mainPTag);

  // style main-body ul tags
  $('#main_body ul').css(mainULTag);
  
  // style main-body a tags
  $('#main_body a').css(mainATag);

  // style resources a tags
  //$('#resources a').css(resATag);

});
