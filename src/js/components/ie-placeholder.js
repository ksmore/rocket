// ie placeholder
function iePlaceholder () {
  kit('.lt-ie10 [placeholder]').forEach(function (el) {
    var input = kit(el),
        text = el.getAttribute('placeholder');

    if (text) { input.attr('value', text); }
    
    input.focus(function(){  
      if (input[0].value === text) {
        input.attr('value', '');
      }
    });
    input.blur(function(){ 
      if (input[0].value === "") {
        input.attr('value', text); 
      }
    }); 
  });
}
ready(function () {
  iePlaceholder();
});