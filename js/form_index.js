$(document).ready(function() {
  console.log('hiya');


  $('#add_res').click(function(event) {
    // get the number of last id
    var index = $(event.target).prev().prev().attr('id').slice(-1);
    index++;

    $('legend.resources')
      .append('<p>')
      .append("<label for='resource" + index + "'>Resource #" + index + ":</label>")
      .append("<input type='text' name='res" + index + "' id='resource" + index + "'>")
      .append("<label for='res_link" + index + "'>Resource #" + index + ":</label>")
      .append("<input type='text' name='res_link" + index + "' id='res_link" + index + "'>")
      //.append('<p>')
      //.append('<p>')
      //.append('<p>')
      //.append('<p>')
      //.append('<p>')
      //.append('<p>')
      .append('</p>')
  });
});
