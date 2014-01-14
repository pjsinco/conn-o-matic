$(document).ready(function() {

  console.log('hiya');

  var maxResources = 7; // max # of resources user can enter
  var counter = 0;

  // ! http://jsfiddle.net/kq5jq/


  // wire up 'Add resource' button
  $('button').click(function() {
    $('.hidden:first').removeClass('hidden');

    counter++;
    // if all resources are showing, remove 'add resource' button
    if (counter == maxResources - 1) {
      $('button').addClass('hidden');
    };
  });



});
