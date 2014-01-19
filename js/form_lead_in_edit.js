$(document).ready(function() {

  console.log('tin can');
  var myTextArea = document.getElementById('lead_in_text');
  var myCodeMiror = CodeMirror(function(elt) {
    myTextArea.parentNode.replaceChild(elt, myTextArea);
  }, {value: myTextArea.value, mode: 'xml'});


});
