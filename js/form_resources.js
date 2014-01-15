$(document).ready(function() {

  console.log('hiya');

  var c = 1;
  var cloned;

  // ! http://jsfiddle.net/kq5jq/


  var increment = function() {
    
  };

  // wire up 'Add resource' button
  $('button').click(function() {
    //$('.hidden:first').removeClass('hidden');

    cloned = $('#res' + c);
    $('#res' + c)
      .clone()
      .attr('id', 'res' + (++c))
      .insertAfter(cloned);
    

    /*
     * NOTE:
     * MAX RESOURCES: 9
     * -- because we're slicing off a single digit here and
     *    in p_resources_edit()
     *
     * increment values on cloned div
     */
    // increment input:name values
    $('#res' + c).find('input').each(function() {
      var attribute = $(this).attr('name');
      attribute = attribute.substring(0, attribute.length - 1);
      console.log(attribute);
      $(this).attr('name', (attribute + c));
    });

    // increment label:for values
    $('#res' + c).find('label').each(function() {
      var attribute = $(this).attr('for');
      attribute = attribute.substring(0, attribute.length - 1);
      $(this).attr('for', (attribute + c));
      //$(this).attr('for', ('resource') + c);
    });


  });



});
