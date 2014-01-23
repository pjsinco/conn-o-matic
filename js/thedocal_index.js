$(document).ready(function() {
  console.log('arsenal');

  //$('.collapse').collapse();

  $(function() {
    $('.accordion').accordion({
      active: false,
      collapsible: true,
      heightStyle: 'content'
    });
  });

});
