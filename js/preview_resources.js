$(document).ready(function() {
  
  console.log('orange');

  var editButtons = "<div class='edit'>";
  editButtons += "<button type='button'>";
  editButtons += "<img src='/css/images/add.gif' alt='Add a resource'>";
  editButtons += "</button><button type='button'>";
  editButtons += "<img src='/css/images/delete.gif' alt='Delete a resource'>";
  editButtons += "</button></div>";

  
  $('#resources li').click(
    function(event) { // mouse in
      event.preventDefault();
      $(this).append("<div class='edit'><button style='margin: 0; padding: 0; display:inline' type='button'></button></div>");
    }
    //}, function() { // mouse out
      //$(this).find('a').children().remove();
    //}
  );

});
