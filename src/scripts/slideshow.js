////////////////////////////////////////////////////////////////
// Slideshow Scripts                                          //
////////////////////////////////////////////////////////////////

// Global array to hold slideshows
var slideshowArray = [];

/**
 * Create a slideshow
 * @param element
 * @param imageArray
 * @param args
 */
function createSlideshow(element, imageArray, args) {
  var slideshowElement = elem(element);

  // Setup args
  var interval 	= (args['interval']) 	? args['interval'] 	: 1500;
  var style 		= (args['style']) 		? args['style'] 		: "";
  var control		= (args['control'])		? args['control']		: "";

  // Store slideshow in array
  var slideshowObj = {};
  slideshowObj.id = slideshowElement.id;
  slideshowObj.numberOfSlides = imageArray.length;
  slideshowObj.imageArray = imageArray;
  slideshowObj.interval = interval;
  slideshowObj.style = style;
  slideshowObj.control = control;
  slideshowObj.currentSlide = 0;
  slideshowObj.counter = 0;
  slideshowObj.loop = null;
  slideshowObj.hovered = false;
  slideshowArray[slideshowElement.id] = slideshowObj;

  // Add slides to slideshow
  switch(style) {
    case "fade":
      slideshowElement.appendChild(setupSlides(slideshowElement.id, "slide-fade"));
      break;
    default:
      slideshowElement.appendChild(setupSlides(slideshowElement.id, ""));
  }

  // Add controls if required
  if(control === "arrows") {
    slideshowElement.appendChild(setupArrowNav(slideshowElement.id));
  } else if(control === "dots") {
    slideshowElement.appendChild(setupDotNav(slideshowElement.id));
  }

  slideshowElement.onmouseover = function () {
    slideshowObj.hovered = true;
    clearTimeout(slideshowObj.loop);
  };

  slideshowElement.onmouseout = function () {
    slideshowObj.hovered = false;
    slideshowObj.loop = setTimeout(nextSlide, slideshowObj.interval, slideshowObj.id, false);
  };

  // Run the slideshow
  nextSlide(slideshowObj.id, false);
}

/**
 * Create a div with the provided images
 * @param slideIdPrefix
 * @param classes
 * @returns {Element}
 */
function setupSlides(slideIdPrefix, classes) {
  var slidesDiv 		= document.createElement("div");
  var slideshowObj 	= slideshowArray[slideIdPrefix];
  slidesDiv.className = "slides";

  // Loop through the images and create an img element
  for(var i = 0; i < slideshowObj.imageArray.length; i++) {
    var img = document.createElement("img");
    if(i === 0) {
      img.className = "slide-visible " + classes
    } else {
      img.className = "slide-hidden " + classes;
    }
    img.id = slideIdPrefix + '-' + i;
    img.src = slideshowObj.imageArray[i];
    slidesDiv.appendChild(img);
  }

  return slidesDiv;
}

/**
 * Creates dot navigation at bottom of slideshow
 * @param slideshowID
 * @returns {Element}
 */
function setupDotNav(slideshowID) {
  var slideshowObj = slideshowArray[slideshowID];
  var dotDiv = document.createElement("div");
  dotDiv.className = "dot-controls";

  for(var i = 0; i < slideshowObj.numberOfSlides; i++) {
    const slide = i;
    var dotItem = document.createElement("div");
    dotItem.id = slideshowObj.id + "-dot-" + i;
    if(i === 0) {dotItem.className = "dot-active";}
    dotItem.onclick = function () {
      gotoSlide(slideshowObj.id, slide);
    };
    dotDiv.appendChild(dotItem);
  }

  return dotDiv;
}

/**
 * Creates left and right arrow navigation
 * @param slideshowID
 * @returns {Element}
 */
function setupArrowNav(slideshowID) {
  var arrowDiv 			= document.createElement("div");
  var arrowNext 		= document.createElement("div");
  var arrowPrevious = document.createElement("div");

  arrowDiv.className 			= "arrow-controls";
  arrowNext.className 		= "next-slide";
  arrowPrevious.className = "previous-slide";

  arrowPrevious.innerHTML = "<span onclick=\"previousSlide(\'" + slideshowID + "\')\">V</span>";
  arrowNext.innerHTML			= "<span onclick=\"nextSlide(\'" + slideshowID + "\', " + true + ")\">V</span>";

  arrowDiv.appendChild(arrowPrevious);
  arrowDiv.appendChild(arrowNext);
  return arrowDiv;
}

/**
 * Progress to the next slide
 * @param slideshowID
 * @param usrCommand
 */
function nextSlide(slideshowID, usrCommand) {
  var slideshowObj = slideshowArray[slideshowID];
  clearTimeout(slideshowObj.loop);

  // Don't progress if the mouse is hovered over it unless overrided with usrCommand
  if(!slideshowObj.hovered || usrCommand) {
    // Fetch the required slide elements
    var currentActive = ((slideshowObj.counter - 1) < 0) ? slideshowObj.numberOfSlides - 1 : slideshowObj.counter - 1;
    var currentSlide = elem("#" + slideshowObj.id + "-" + currentActive);
    var newSlide = elem("#" + slideshowObj.id + "-" + slideshowObj.counter);

    transitionSlide(currentSlide, newSlide);
    if(slideshowObj.control === "dots") {
      updateDotNav(slideshowObj.id, currentActive, slideshowObj.counter);
    }

    slideshowObj.currentSlide = slideshowObj.counter;
    slideshowObj.counter = (slideshowObj.counter < slideshowObj.numberOfSlides - 1) ? slideshowObj.counter + 1 : 0;
  }

  // Reset the timer to progress the slides
  slideshowObj.loop = setTimeout(nextSlide, slideshowObj.interval, slideshowObj.id, false);
}

/**
 * Show the previous slide
 * @param slideshowID
 */
function previousSlide(slideshowID) {
  var slideshowObj = slideshowArray[slideshowID];
  clearTimeout(slideshowObj.loop);

  // Fetch the required slide elements
  var currentCounter = (slideshowObj.counter - 1 < 0) ? slideshowObj.numberOfSlides - 1 : slideshowObj.counter - 1;
  var previousCounter = (currentCounter - 1 < 0) ? slideshowObj.numberOfSlides - 1 : currentCounter - 1;
  var currentSlide = elem("#" + slideshowObj.id + "-" + currentCounter);
  var newSlide = elem("#" + slideshowObj.id + "-" + previousCounter);
  transitionSlide(currentSlide, newSlide);

  // Set the counter and reset the timer to progress the slides
  slideshowObj.counter = previousCounter;
  slideshowObj.counter = (slideshowObj.counter < slideshowObj.numberOfSlides - 1) ? slideshowObj.counter + 1 : 0;
  slideshowObj.loop = setTimeout(nextSlide, slideshowObj.interval, slideshowObj.id, false);
}

/**
 * Show the requested slide
 * @param slideshowID
 * @param slideNumber
 */
function gotoSlide(slideshowID, slideNumber) {
  var slideshowObj = slideshowArray[slideshowID];
  clearTimeout(slideshowObj.loop);

  // Fetch slide numbers
  var currentSlide = slideshowObj.currentSlide;
  var newSlide = slideNumber;

  // Update the slideshow counter to the new slide number
  slideshowObj.counter = newSlide;
  slideshowObj.currentSlide = newSlide;

  // Transition the slide and update the nav dots
  var cSlide = elem("#" + slideshowObj.id + "-" + currentSlide);
  var nSlide = elem("#" + slideshowObj.id + "-" + newSlide);
  transitionSlide(cSlide, nSlide);
  updateDotNav(slideshowObj.id, currentSlide, newSlide);
  slideshowObj.counter = (newSlide + 1 > slideshowObj.numberOfSlides - 1) ? 0 : newSlide + 1 ;
}

/**
 * Transition between the given slides
 * @param currentSlide
 * @param newSlide
 */
function transitionSlide(currentSlide, newSlide) {
  currentSlide.classList.remove("slide-visible");
  currentSlide.classList.add("slide-hidden");
  newSlide.classList.remove("slide-hidden");
  newSlide.classList.add("slide-visible");
}

function updateDotNav(slideshowID, currentSlide, newSlide) {
  var dot1 = elem("#" + slideshowID + "-dot-" + currentSlide);
  var dot2 = elem("#" + slideshowID + "-dot-" + newSlide);

  dot1.classList.remove("dot-active");
  dot2.classList.add("dot-active");
}

////////////////////////////////////////////////////////////////