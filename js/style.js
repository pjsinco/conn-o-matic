$(document).ready(function() {

  var leadInATag = {
    color: '#fdc578'
  }
  
  var leadInPTag = {
    fontSize: '14px',
    color: '#fdc578',
    lineHeight: '22px',
    marginTop: '10px',
    marginRight: '20px',
    marginBottom: '10px',
    marginLeft: '20px'
  };

  var kickerPTag = {
    fontSize: '14px',
    color: '#111f43',
    lineHeight: '18px',
    fontWeight: 'bold',
    marginTop: '3px',
    marginRight: '20px',
    marginBottom: '6px',
    marginLeft: '20px'
  };

  var kickerATag = {
    color: '#111f43'
  };

  var headlineH2 = {
    color: '#111f4c',
    'font-size': '15px',
    'margin-bottom': '0px',
    'margin-left': '20px',
    'margin-right': '20px',
    'margin-top': '10px'
  };

  console.log(headlineH2);

  var mainPTag = {
    fontSize     : '13px',
    color         : '#333333',
    lineHeight   : '17px',
    marginTop    : '0px',
    marginRight  : '20px',
    marginBottom : '10px',
    marginLeft   : '20px'
  };
  
  // style lead-in a tags
  $('#lead_in a').css({
    color: leadInATag.color
  });

  // style kicker p tags
  $('#lead_in p').css({
    'font-size'     : leadInPTag.fontSize,
    color           : leadInPTag.color,
    'line-height'   : leadInPTag.lineHeight,
    'margin-top'    : leadInPTag.marginTop,
    'margin-right'  : leadInPTag.marginRight,
    'margin-bottom' : leadInPTag.marginBottom,
    'margin-left'   : leadInPTag.marginLeft
  });

  // style kicker p tags
  $('#kicker p').css({
    'font-size'     : '14px',
    'color'         : '#111f43',
    'line-height'   : '18px',
    'font-weight'   : 'bold',
    'margin-top'    : '3px',
    'margin-right'  : '20px',
    'margin-bottom' : '6px',
    'margin-left'   : '20px'
  });

  // style kicker a tags
  $('#kicker a').css({
    color: kickerATag.color 
  });

  // style headline
  $('#headline h2').css(headlineH2);

  



});
