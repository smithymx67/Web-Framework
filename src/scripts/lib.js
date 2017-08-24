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
  var theElement;
  
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
* @param  {Date}    dateObj
* @param  {bool}    showSecs
* @param  {bool}    showAMPM
* @return {string}  theTime
**/
function get12HrTime(dateObj, showSecs, showAMPM) {
  var hours = (dateObj.getHours() > 12) ? dateObj.getHours() - 12 : dateObj.getHours();
  var mins = leadZero(dateObj.getMinutes());
  var secs = leadZero(dateObj.getSeconds());
  var ampm = (dateObj.getHours() > 12) ? "PM" : "AM";
  var theTime;
  
  theTime = hours + ":" + mins;
  if(showSecs === true) {theTime += ":" + secs};
  if(showAMPM === true) {theTime += " " + ampm};
  return theTime;
}

/**
* Returns the time in 24hr format
* @param  {Date}    dateObj
* @param  {bool}    showSecs    
* @return {string}  theTime
**/
function get24HrTime(dateObj, showSecs) {
  var hours = leadZero(dateObj.getHours());
  var mins = leadZero(dateObj.getMinutes());
  var secs = leadZero(dateObj.getSeconds());
  var theTime;
  
  theTime = hours + ":" + mins;
  if(showSecs === true) {theTime += ":" + secs};
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
    case 1, 21, 31:
      theDate = date + "st";
      break;
    case 2, 22, 32:
      theDate = date + "nd";
      break;
    case 3, 23:
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
window.onload = fixifyFooter();
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
window.onload = stickifyFooter();
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