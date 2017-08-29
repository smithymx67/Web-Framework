// JavaScript Framework
// Author: Sam Smith (smithymx67)

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
  slideshowObj.counter = 0;
  slideshowArray[slideshowElement.id] = slideshowObj;

	// Run slideshow
	switch(style) {
		case "fade":
      slideshowElement.appendChild(setupSlides(slideshowElement.id, "slide-hidden slide-fade"));
			fadeSlideshowLoop(imageArray.length, slideshowElement.id, interval, 0);
			break;
		default:
      slideshowElement.appendChild(setupSlides(slideshowElement.id, "slide-hidden"));
			defaultSlideshowLoop(imageArray.length, slideshowElement.id, interval, 0);
	}

	// Add controls if required
	if(controls === "arrows") {
		slideshowElement.appendChild(setupArrowNav());
	}
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

  for(let i = 0; i < slideshowObj.imageArray.length; i++) {
    let img = document.createElement("img");
    img.className = classes;
    img.id = slideIdPrefix + '-' + i;
    img.src = slideshowObj.imageArray[i];
    slidesDiv.appendChild(img);
  }

  return slidesDiv;
}


function setupDotNav() {

}

function setupArrowNav() {
	let arrowDiv 			= document.createElement("div");
	let arrowNext 		= document.createElement("div");
	let arrowPrevious = document.createElement("div");

	arrowDiv.className 			= "controls";
	arrowNext.className 		= "next-slide";
	arrowPrevious.className = "previous-slide";

	arrowPrevious.innerHTML = "<span>&lt;</span>";
	arrowNext.innerHTML			= "<span>&gt;</span>";

	arrowDiv.appendChild(arrowPrevious);
	arrowDiv.appendChild(arrowNext);
	return arrowDiv;
}

function nextSlide() {
	
}

function previousSlide() {
	
}

function gotoSlide(slideNumber) {
	
}

function defaultSlideshowLoop(numberOfImages, idPrefix, interval, counter) {
	let currentActive = ((counter - 1) < 0) ? numberOfImages - 1 : counter - 1;
	let currentSlide = elem("#" + idPrefix + "-" + currentActive);
	let nextSlide = elem("#" + idPrefix + "-" + counter);

	currentSlide.classList.remove("slide-visible");
	currentSlide.classList.add("slide-hidden");
	nextSlide.classList.remove("slide-hidden");
	nextSlide.classList.add("slide-visible");

	counter = (counter < numberOfImages - 1) ? counter + 1 : 0;
	setTimeout(defaultSlideshowLoop, interval, numberOfImages, idPrefix, interval, counter);
}

function fadeSlideshowLoop(numberOfImages, idPrefix, interval, counter) {
	let currentActive = ((counter - 1) < 0) ? numberOfImages - 1 : counter - 1;
	let currentSlide = elem("#" + idPrefix + "-" + currentActive);
	let nextSlide = elem("#" + idPrefix + "-" + counter);

	currentSlide.classList.remove("slide-visible");
	currentSlide.classList.add("slide-hidden");
	nextSlide.classList.remove("slide-hidden");
	nextSlide.classList.add("slide-visible");

	counter = (counter < numberOfImages - 1) ? counter + 1 : 0;
	setTimeout(defaultSlideshowLoop, interval, numberOfImages, idPrefix, interval, counter);
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