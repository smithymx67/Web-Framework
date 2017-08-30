// JavaScript Framework
// Author: Sam Smith (smithymx67)
// Website: https://samsmith.me
// Version: 1.0.0

////////////////////////////////////////////////////////////////
// Element Selector                                           //
////////////////////////////////////////////////////////////////

/**
* Return the element passed by its ID
* @param  {string} element
* @return {Object} theElement
**/
function elem(element) {
  let theElement;
  
  if(element.startsWith('.')) {
    theElement = document.getElementsByClassName(element.split('.')[1]);
  } else if(element.startsWith('#')) {
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
	let months = [
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
	let days = [
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
	let hours = (dateObj.getHours() > 12) ? dateObj.getHours() - 12 : dateObj.getHours();
	let mins = leadZero(dateObj.getMinutes());
	let secs = leadZero(dateObj.getSeconds());
	let ampm = (dateObj.getHours() > 12) ? "PM" : "AM";
	let theTime;

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
	let hours = leadZero(dateObj.getHours());
	let mins = leadZero(dateObj.getMinutes());
	let secs = leadZero(dateObj.getSeconds());
	let theTime;

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
	let date = leadZero(dateObj.getDate());
	let month = leadZero(dateObj.getMonth() + 1);
	let year = dateObj.getFullYear();
	return date + "/" + month + "/" + year;
}

/**
 * Return the date in the format Day Date Month Year
 * @param  {Date}    dateObj
 * @return {string}
 **/
function getLongDate(dateObj) {
	let day = textifyWeekDay(dateObj.getDay());
	let date = suffixDate(dateObj.getDate());
	let month = textifyMonth(dateObj.getMonth());
	let year = dateObj.getFullYear();
	return day + " " + date + " " + month + " " + year;
}

/**
 * Add a suffix to the date
 * @param  {number} date
 * @return {string} theDate
 **/
function suffixDate(date) {
	let theDate;
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
// Footer Scripts                                             //
////////////////////////////////////////////////////////////////

/**
 * Fix a header to the top of the page
 */
window.onload = fixifyHeader();
function fixifyHeader() {
	let header = document.getElementsByTagName("header");

	for(let i = 0; i < header.length; i++) {
		if(header[i].classList.contains("fixed-header")) {
			let offset = header[i].clientHeight;
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
window.onload = fixifyFooter();
function fixifyFooter() {
	let footer = document.getElementsByTagName("footer");

	for(let i = 0; i < footer.length; i++) {
		if(footer[i].classList.contains("fixed-footer")) {
			let offset = footer[i].clientHeight;
			document.getElementsByTagName("body")[0].style.marginBottom = offset + "px";
		}
	}
}

/**
 * Stick a footer to the bottom of the page
 */
window.onload = stickifyFooter();
function stickifyFooter() {
	let footer = document.getElementsByTagName("footer");

	for(let i = 0; i < footer.length; i++) {
		if(footer[i].classList.contains("sticky-footer")) {
			let offset = footer[i].clientHeight;
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
let slideshowArray = [];

/**
 * Create a slideshow
 * @param element
 * @param imageArray
 * @param args
 */
function createSlideshow(element, imageArray, args) {
	let slideshowElement = elem(element);

	// Setup args
	let interval 	= (args['interval']) 	? args['interval'] 	: 1500;
	let style 		= (args['style']) 		? args['style'] 		: "";
	let controls	= (args['controls'])	? args['controls']	: "";

  // Store slideshow in array
  let slideshowObj = {};
  slideshowObj.id = slideshowElement.id;
  slideshowObj.numberOfSlides = imageArray.length;
  slideshowObj.imageArray = imageArray;
  slideshowObj.interval = interval;
  slideshowObj.style = style;
	slideshowObj.controls = controls;
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
	if(controls === "arrows") {
		slideshowElement.appendChild(setupArrowNav(slideshowElement.id));
	} else if(controls === "dots") {
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
  let slidesDiv 		= document.createElement("div");
  let slideshowObj 	= slideshowArray[slideIdPrefix];
  slidesDiv.className = "slides";

  // Loop through the images and create an img element
  for(let i = 0; i < slideshowObj.imageArray.length; i++) {
    let img = document.createElement("img");
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
	let slideshowObj = slideshowArray[slideshowID];
	let dotDiv = document.createElement("div");
	dotDiv.className = "dot-controls";

	for(let i = 0; i < slideshowObj.numberOfSlides; i++) {
		let dotItem = document.createElement("div");
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
	let arrowDiv 			= document.createElement("div");
	let arrowNext 		= document.createElement("div");
	let arrowPrevious = document.createElement("div");

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
	let slideshowObj = slideshowArray[slideshowID];
	clearTimeout(slideshowObj.loop);

	// Don't progress if the mouse is hovered over it unless overrided with usrCommand
	if(!slideshowObj.hovered || usrCommand) {
		// Fetch the required slide elements
    let currentActive = ((slideshowObj.counter - 1) < 0) ? slideshowObj.numberOfSlides - 1 : slideshowObj.counter - 1;
    let currentSlide = elem("#" + slideshowObj.id + "-" + currentActive);
    let newSlide = elem("#" + slideshowObj.id + "-" + slideshowObj.counter);

    transitionSlide(currentSlide, newSlide);
		if(slideshowObj.controls === "dots") {
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
	let slideshowObj = slideshowArray[slideshowID];
	clearTimeout(slideshowObj.loop);

	// Fetch the required slide elements
	let currentCounter = (slideshowObj.counter - 1 < 0) ? slideshowObj.numberOfSlides - 1 : slideshowObj.counter - 1;
	let previousCounter = (currentCounter - 1 < 0) ? slideshowObj.numberOfSlides - 1 : currentCounter - 1;
  let currentSlide = elem("#" + slideshowObj.id + "-" + currentCounter);
  let newSlide = elem("#" + slideshowObj.id + "-" + previousCounter);
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
	let slideshowObj = slideshowArray[slideshowID];
	clearTimeout(slideshowObj.loop);

	// Fetch slide numbers
  let currentSlide = slideshowObj.currentSlide;
  let newSlide = slideNumber;

  // Update the slideshow counter to the new slide number
  slideshowObj.counter = newSlide;
  slideshowObj.currentSlide = newSlide;

  // Transition the slide and update the nav dots
  let cSlide = elem("#" + slideshowObj.id + "-" + currentSlide);
  let nSlide = elem("#" + slideshowObj.id + "-" + newSlide);
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
	let dot1 = elem("#" + slideshowID + "-dot-" + currentSlide);
	let dot2 = elem("#" + slideshowID + "-dot-" + newSlide);

	dot1.classList.remove("dot-active");
	dot2.classList.add("dot-active");
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