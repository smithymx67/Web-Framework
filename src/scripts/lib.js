// JavaScript Framework
// Author     Sam Smith (smithymx67)
// Website    https://samsmith.me
// Version    1.1.0
// License    MIT (https://github.com/smithymx67/Web-Framework/blob/master/LICENSE.txt)

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


////////////////////////////////////////////////////////////////
// Date Time Functions                                        //
////////////////////////////////////////////////////////////////

/**
 * Convert the month number into text
 * @param  {number} month
 * @return {string}
 **/
function textifyMonth(month) {
  var months = [
    "January",
    "Febuary",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];
  return months[month];
}

/**
 * Convert the day number into text
 * @param  {number} day
 * @return {string}
 **/
function textifyWeekDay(day) {
  var days = [
	  "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];
	return days[day];
}

/**
 * Returns the time in 12hr format
 * @param  {Date}        dateObj
 * @param  {boolean}     showSecs
 * @param  {boolean}     showAMPM
 * @return {string}      theTime
 **/
function get12HrTime(dateObj, showSecs, showAMPM) {
  var hours = (dateObj.getHours() > 12) ? dateObj.getHours() - 12 : dateObj.getHours();
  var mins = leadZero(dateObj.getMinutes());
  var secs = leadZero(dateObj.getSeconds());
  var ampm = (dateObj.getHours() > 12) ? "PM" : "AM";
  var theTime;

  theTime = hours + ":" + mins;
  if(showSecs === true) {theTime += ":" + secs}
  if(showAMPM === true) {theTime += " " + ampm}
  return theTime;
}

/**
 * Returns the time in 24hr format
 * @param  {Date}        dateObj
 * @param  {boolean}     showSecs
 * @return {string}      theTime
 **/
function get24HrTime(dateObj, showSecs) {
  var hours = leadZero(dateObj.getHours());
  var mins = leadZero(dateObj.getMinutes());
  var secs = leadZero(dateObj.getSeconds());
  var theTime;

  theTime = hours + ":" + mins;
  if(showSecs === true) {theTime += ":" + secs}
  return theTime;
}

/**
 * Add a leading zero is needed
 * @param  {number} number
 * @return {string}
 **/
function leadZero(number) {
  return (number < 10) ? "0" + number : number;
}

/**
 * Returns the date in the format DD/MM/YYYY
 * @param  {Date}    dateObj
 * @return {string}
 **/
function getShortDate(dateObj) {
  var date = leadZero(dateObj.getDate());
  var month = leadZero(dateObj.getMonth() + 1);
  var year = dateObj.getFullYear();
  return date + "/" + month + "/" + year;
}

/**
 * Return the date in the format Day Date Month Year
 * @param  {Date}    dateObj
 * @return {string}
 **/
function getLongDate(dateObj) {
  var day = textifyWeekDay(dateObj.getDay());
  var date = suffixDate(dateObj.getDate());
  var month = textifyMonth(dateObj.getMonth());
  var year = dateObj.getFullYear();
  return day + " " + date + " " + month + " " + year;
}

/**
 * Add a suffix to the date
 * @param  {number} date
 * @return {string} theDate
 **/
function suffixDate(date) {
  var theDate;
  switch(date) {
    case 1:
    case 21:
    case 31:
      theDate = date + "st";
      break;
    case 2:
    case 22:
    case 32:
      theDate = date + "nd";
      break;
    case 3:
    case 23:
      theDate = date + "rd";
      break;
    default:
      theDate = date + "th";
  }
  return theDate;
}

////////////////////////////////////////////////////////////////


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
    var dotItem = document.createElement("div");
    dotItem.id = slideshowObj.id + "-dot-" + i;
    if(i === 0) {dotItem.className = "dot-active";}
    dotItem.onclick = function () {
      gotoSlide(slideshowObj.id, i);
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


////////////////////////////////////////////////////////////////
// Gallery Functions                                          //
////////////////////////////////////////////////////////////////

/**
 * Setup the elements needed for the gallery to work
 * @param galleryImages
 * @param galleryElement
 * @param columnClass
 * @param imageClasses
 */
function createGallery(galleryImages, galleryElement, columnClass ,imageClasses) {
  var galleryElem           = elem(galleryElement);
  var galleryOverlay        = document.createElement("div");
  var galleryOverlayImg     = document.createElement("img");

  galleryOverlayImg.className = "bordered-img";
  galleryOverlay.className    = "gallery-overlay";
  galleryOverlay.onclick = function () {
    galleryOverlayClicked(galleryOverlay);
  };

  galleryElem.appendChild(galleryOverlay);
  galleryOverlay.appendChild(galleryOverlayImg);

  // Loop each gallery image
  for(var i = 0; i < galleryImages.length; i++) {
    var galleryImgContainer = document.createElement("div");
    var galleryImage        = document.createElement("img");

    galleryImgContainer.className = columnClass;
    galleryImage.className        = imageClasses;
    galleryImage.src              = galleryImages[i];

    galleryElem.appendChild(galleryImgContainer);
    galleryImgContainer.appendChild(galleryImage);
  }

  // Loop each image in gallery
  for(var j = 1; j < (galleryElem.children.length); j++) {
    var imgElem = galleryElem.children[j];
    imgElem.onclick = function() {
      galleryImgClicked(imgElem, galleryOverlay);
    }
  }
}

/**
 * Run when a gallery image is clicked
 * @param imgElem
 * @param overlayElem
 */
function galleryImgClicked(imgElem, overlayElem) {
  overlayElem.getElementsByTagName("img")[0].src = imgElem.getElementsByTagName("img")[0].src;
  galleryOverlayShow(overlayElem);
}

/**
 * Run when the gallery overlay is clicked
 * @param overlayElem
 */
function galleryOverlayClicked(overlayElem) {
  galleryOverlayHide(overlayElem);
}

/**
 * Show the gallery overlay
 * @param overlayElem
 */
function galleryOverlayShow(overlayElem) {
  overlayElem.classList.remove("gallery-overlay-hidden");
  overlayElem.classList.add("gallery-overlay-visible");
  document.body.style.overflow = "hidden";
}

/**
 * Hide the gallery overlay
 * @param overlayElem
 */
function galleryOverlayHide(overlayElem) {
  overlayElem.classList.add("gallery-overlay-hidden");
  overlayElem.classList.remove("gallery-overlay-visible");
  document.body.style.overflow = "";
}

////////////////////////////////////////////////////////////////

/**
 * Log text to the console
 * @param {string} message
 * @param {string} style
 **/
function consoleLog(message, style) {
  switch(style) {
    case "info":
      console.log("%c" + message, "color: blue");
      break;
    case "success":
      console.log("%c" + message, "color: green");
      break;
    case "warning":
      console.log("%c" + message, "color: orange");
      break;
    case "danger":
      console.log("%c" + message, "color: red");
      break;
    default:
      console.log(message);
  }
}