////////////////////////////////////////////////////////////////
// Footer Scripts                                             //
////////////////////////////////////////////////////////////////

/**
 * Fix a footer to the bottom of the page
 */
//window.onload = fixifyFooter();
window.addEventListener("DOMContentLoaded", fixifyFooter);
window.addEventListener("resize", fixifyFooter);
function fixifyFooter() {
  var footer = document.getElementsByTagName("footer");

  for(var i = 0; i < footer.length; i++) {
    if(footer[i].classList.contains("fixed-footer")) {
      var offset = footer[i].clientHeight;
      document.getElementsByTagName("body")[0].style.marginBottom = offset + "px";
    }
  }
}

/**
 * Stick a footer to the bottom of the page
 */
//window.ready = stickifyFooter();
window.addEventListener("DOMContentLoaded", stickifyFooter);
window.addEventListener("resize", stickifyFooter);
function stickifyFooter() {
  var footer = document.getElementsByTagName("footer");

  for(var i = 0; i < footer.length; i++) {
    if(footer[i].classList.contains("sticky-footer")) {
      var offset = footer[i].clientHeight;
      document.getElementsByTagName("body")[0].style.paddingBottom = offset + "px";
      document.getElementsByTagName("html")[0].style.minHeight = "100%";
      document.getElementsByTagName("html")[0].style.position = "relative";
    }
  }
}

////////////////////////////////////////////////////////////////