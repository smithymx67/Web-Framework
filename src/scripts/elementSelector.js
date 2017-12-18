////////////////////////////////////////////////////////////////
// Element Selector                                           //
////////////////////////////////////////////////////////////////

/**
 * Return the element passed by its ID
 * @param  {string} element
 * @return {Object} theElement
 **/
function elem(element) {
  var theElement;

  if(element.substring(0, 1) === '.') {
    theElement = document.getElementsByClassName(element.split('.')[1]);
  } else if(element.substring(0, 1) === '#') {
    theElement = document.getElementById(element.split('#')[1]);
  } else {
    theElement = document.getElementsByTagName(element);
  }

  return theElement;
}

////////////////////////////////////////////////////////////////