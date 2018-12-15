
function hookupevents() {
 for (var i = 0; i < 4; i++) {
  document.getElementById("myButton" + i)
   .addEventListener("click",
         function() { alert(i); });
 }
}
