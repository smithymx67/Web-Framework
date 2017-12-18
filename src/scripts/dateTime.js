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