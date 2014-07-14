$(document).ready(function() {
 
  var url = '/twitter_counts/p_index';
  
  $('#count-followers').click(function(evt) {
    
    $.get(url, function(response) {
      console.log(response);
      $('#followers').html('<p>' +
        response + '</p>');
    });
  
  });


});
