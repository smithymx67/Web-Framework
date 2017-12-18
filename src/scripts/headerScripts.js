////////////////////////////////////////////////////////////////
// Header Scripts                                             //
////////////////////////////////////////////////////////////////

/**
 * Fix a header to the top of the page
 */
window.addEventListener("DOMContentLoaded", fixifyHeader);
window.addEventListener("resize", fixifyHeader);
function fixifyHeader() {
  var header = document.getElementsByTagName("header");

  for(var i = 0; i < header.length; i++) {
    if(header[i].classList.contains("fixed-header")) {
      var offset = header[i].clientHeight;
      document.getElementsByTagName("body")[0].style.marginTop = offset + "px";
    }
  }
}

////////////////////////////////////////////////////////////////