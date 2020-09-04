window.addEventListener("resize", reorder);
reorder();
function reorder() {
  var w = window.innerWidth;
  if(w <= 800) {
    $("#left").insertAfter("#right");
  }
}
