/** Script to create a date / time picker **/
var dateTimePicker = (function() {
  /*
    ########################
    GLOBAL VARIABLES - START
    ########################
  */
  /** Variables used in the render process **/
  var currentMonth,
      currentYear,
      currentMode,
      yearRangeMin,
      yearRangeMax,

      /** Variables used to track the user selected date / time **/
      selectedTimeHour,
      selectedTimeMin,
      selectedDate,
      selectedDay,
      selectedMonth,
      selectedYear,

      /** Variables used to store meta data about date / time pickers **/
      pickerCounter = 0,
      pickerCurrentPicker,
      pickerCurrentValue,
      pickerCurrentPickerID,
      pickerRootParentArray = [],
      pickerModeArray = [];
  /*
    ######################
    GLOBAL VARIABLES - END
    ######################
  */

  /*
    ##################################
    DATE / TIME PICKER BUILDER - START
    ##################################
  */
  /** Create a new date / time picker based on the args given **/
  function create(args) {
    if(args.mode && args.dateInputID) {
      // Increment the picker counter and store the pickers root element ID
      pickerCounter++;
      pickerRootParentArray[pickerCounter] = args.dateInputID;

      // Initial setup for picker elements before generation of dialog
      var dateInputElem   = elem(args.dateInputID),
          pickerID        = "dateTimePickerFor_" + pickerCounter,
          theInput        = dateInputElem.getElementsByTagName("input")[0];

      theInput.setAttribute("onClick", "dateTimePicker.show(" + pickerCounter + ", this.value)");
      theInput.setAttribute("readonly", "readonly");
      pickerModeArray[pickerCounter] = args.mode;
      generateInterface(args.dateInputID, pickerID, args.mode);
    } else {
      console.log("Date Time Picker - Missing required args");
    }
  }

  /** Generate the dialog based on the requested mode **/
  function generateInterface(dateInputID, pickerID, mode) {
    var dateInputElem = elem(dateInputID),
        dateInputContentContainer;

    // Create and append a container to the input element to hold the interface
    dateInputElem.appendChild(generateDateTimeModule_container(pickerID));
    dateInputContentContainer = dateInputElem.getElementsByClassName("datetime-selector-content")[0];

    // Decide on what to show in the interface
    switch(mode) {
      case "datetime":
        dateInputContentContainer.appendChild(generateDateTimeModule_calender());
        dateInputContentContainer.appendChild(generateDateTimeModule_time());
        break;
      case "date":
        dateInputContentContainer.appendChild(generateDateTimeModule_calender());
        break;
      case "month":
        dateInputContentContainer.appendChild(generateDateTimeModule_calender());
        break;
      case "time":
        dateInputContentContainer.appendChild(generateDateTimeModule_time());
        break;
    }

    // Append the control buttons to the end of the container
    dateInputContentContainer.appendChild(generateDateTimeModule_buttons());
  }

  /** Generate the interface container **/
  function generateDateTimeModule_container(pickerID) {
    // Create the container elements
    var dateTimePopup               = document.createElement("div"),
        dateTimeSelector            = document.createElement("div"),
        dateTimeSelectorPreview     = document.createElement("div"),
        dateTimeSelectorContent     = document.createElement("div"),
        dateTimeCurrentDate         = document.createElement("p");

    // Assign classes to the selector element based on the mode requested
    switch(pickerModeArray[pickerCounter]) {
      case "datetime":  dateTimeSelector.className = "datetime-selector width-6 width-xl-10"; break;
      case "date":      dateTimeSelector.className = "datetime-selector width-4 width-xl-8 width-m-10"; break;
      case "month":     dateTimeSelector.className = "datetime-selector width-4 width-xl-8 width-m-10"; break;
      case "time":      dateTimeSelector.className = "datetime-selector width-3 width-xl-6 width-m-10"; break;
    }

    // Assign classes and id's to the other elements
    dateTimePopup.className             = "datetime-popup";
    dateTimeSelectorPreview.className   = "col-12 center-align datetime-selector-preview";
    dateTimeSelectorContent.className   = "col-12 datetime-selector-content";
    dateTimeCurrentDate.id              = "datetime-selector-current-date_" + pickerCounter;
    dateTimePopup.id                    = pickerID;

    // Append the created elements to their parents a return the finished container
    dateTimeSelectorPreview.appendChild(dateTimeCurrentDate);
    dateTimeSelector.appendChild(dateTimeSelectorPreview);
    dateTimeSelector.appendChild(dateTimeSelectorContent);
    dateTimePopup.appendChild(dateTimeSelector);
    return dateTimePopup;
  }

  /** Generate the buttons interface **/
  function generateDateTimeModule_buttons() {
    // Create the button elements
    var dateTimeButtons           = document.createElement("div"),
        dateTimeButtonsOk         = document.createElement("button"),
        dateTimeButtonsCancel     = document.createElement("button");

    // Assign classes and content to the buttons
    dateTimeButtons.className         = "col-12 center-align";
    dateTimeButtonsOk.className       = "btn width-2 width-xl-3 width-m-4";
    dateTimeButtonsCancel.className   = "btn width-2 width-xl-3 width-m-4";
    dateTimeButtonsOk.innerHTML       = "Ok";
    dateTimeButtonsCancel.innerHTML   = "Cancel";

    // Set an onclick attribute to the buttons
    dateTimeButtonsOk.setAttribute("onClick", "dateTimePicker.set()");
    dateTimeButtonsCancel.setAttribute("onClick", "dateTimePicker.close()");
    dateTimeButtonsOk.setAttribute("type", "button");
    dateTimeButtonsCancel.setAttribute("type", "button");

    // Append the buttons to the parent element and return the buttons module
    dateTimeButtons.appendChild(dateTimeButtonsOk);
    dateTimeButtons.appendChild(dateTimeButtonsCancel);
    return dateTimeButtons;
  }

  /** Generate the calender interface **/
  function generateDateTimeModule_calender() {
    // Create the calender elements and other variables
    var dateTimeCalender                = document.createElement("div"),
        dateTimeCalenderNav             = document.createElement("div"),
        dateTimeCalenderYears           = document.createElement("div"),
        dateTimeCalenderMonths          = document.createElement("div"),
        dateTimeCalenderDates           = document.createElement("div"),
        dateTimeCalenderNavDecrement    = document.createElement("div"),
        dateTimeCalenderNavHeader       = document.createElement("div"),
        dateTimeCalenderNavIncrement    = document.createElement("div"),
        decrementSpan                   = document.createElement("span"),
        headerSpan                      = document.createElement("span"),
        incrementSpan                   = document.createElement("span"),
        yearsTable                      = document.createElement("table"),
        monthsTable                     = document.createElement("table"),
        datesTable                      = document.createElement("table"),
        datesTableHeader                = document.createElement("tr"),
        monthsArray                     = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        weekdayArray                    = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"],
        monthsCounter                   = 0;

    // Set classes for the calender elements based on the mode
    if(pickerModeArray[pickerCounter] !== "datetime"){ dateTimeCalender.className = "col-12"; }
    else { dateTimeCalender.className = "col-8 col-m-12"; }

    // Set classes and id's to elements
    dateTimeCalenderNav.className           = "col-12 date-time-cal-header";
    dateTimeCalenderNavDecrement.className  = "col-1 padding-0 center-align";
    dateTimeCalenderNavHeader.className     = "col-10 padding-0 center-align";
    dateTimeCalenderNavIncrement.className  = "col-1 padding-0 center-align";
    decrementSpan.className                 = "date-mode-decrement";
    headerSpan.className                    = "date-mode-header";
    incrementSpan.className                 = "date-mode-increment";
    dateTimeCalenderYears.className         = "col-12 padding-0 date-cal-years";
    dateTimeCalenderMonths.className        = "col-12 padding-0 date-cal-months";
    dateTimeCalenderDates.className         = "col-12 padding-0 date-time-cal-visible date-cal-days";
    headerSpan.id                           = "date-mode-header_" + pickerCounter;
    dateTimeCalenderYears.id                = "date-cal-years_" + pickerCounter;
    dateTimeCalenderMonths.id               = "date-cal-months_" + pickerCounter;
    dateTimeCalenderDates.id                = "date-cal-days_" + pickerCounter;

    // Set an onclick attribute to the elements
    decrementSpan.setAttribute("onClick", "dateTimePicker.decrementCal()");
    headerSpan.setAttribute("onClick", "dateTimePicker.changeCalMode()");
    incrementSpan.setAttribute("onClick", "dateTimePicker.incrementCal()");

    // Set the content of the elements
    decrementSpan.innerHTML   = '&lt;';
    headerSpan.innerHTML      = 'Month Year';
    incrementSpan.innerHTML   = '&gt;';

    // Create year and month grids 3 Rows 4 Cols
    for(var i = 1; i <= 3; i++) {
      var yearsTableRow   = document.createElement("tr"),
          monthsTableRow  = document.createElement("tr");
      for(var j = 0; j < 4; j++) {
        var yearsTableRowCol  = document.createElement("td"),
            monthsTableRowCol = document.createElement("td");

        yearsTableRowCol.id           = "years-" + i + "-" + j + "_" + pickerCounter;
        monthsTableRowCol.id          = "months-" + i + "-" + j + "_" + pickerCounter;
        monthsTableRowCol.innerHTML   = monthsArray[monthsCounter];
        monthsCounter++;

        yearsTableRow.appendChild(yearsTableRowCol);
        monthsTableRow.appendChild(monthsTableRowCol);
      }
      yearsTable.appendChild(yearsTableRow);
      monthsTable.appendChild(monthsTableRow);
    }

    if(pickerModeArray[pickerCounter] !== "months") {
      // Create date days header 1 Row 7 Cols
      for(i = 0; i < 7; i++) {
        var datesTableHeaderCol = document.createElement("th");
        datesTableHeaderCol.innerHTML = weekdayArray[i];
        datesTableHeader.appendChild(datesTableHeaderCol);
      }
      datesTable.appendChild(datesTableHeader);

      // Create dates grid 6 Rows 7 Cols
      for(i = 1; i <= 6; i++) {
        var datesTableRow = document.createElement("tr");
        for(j = 0; j < 7; j++) {
          var datesTableRowCol = document.createElement("td");
          datesTableRowCol.id = "dates-" + i + "-" + j + "_" + pickerCounter;
          datesTableRow.appendChild(datesTableRowCol);
        }
        datesTable.appendChild(datesTableRow);
      }
    }

    // Append the calender elements to the calender parent and return the calender module
    dateTimeCalenderNavDecrement.appendChild(decrementSpan);
    dateTimeCalenderNavHeader.appendChild(headerSpan);
    dateTimeCalenderNavIncrement.appendChild(incrementSpan);
    dateTimeCalenderNav.appendChild(dateTimeCalenderNavDecrement);
    dateTimeCalenderNav.appendChild(dateTimeCalenderNavHeader);
    dateTimeCalenderNav.appendChild(dateTimeCalenderNavIncrement);
    dateTimeCalenderYears.appendChild(yearsTable);
    dateTimeCalenderMonths.appendChild(monthsTable);
    dateTimeCalenderDates.appendChild(datesTable);
    dateTimeCalender.appendChild(dateTimeCalenderNav);
    dateTimeCalender.appendChild(dateTimeCalenderYears);
    dateTimeCalender.appendChild(dateTimeCalenderMonths);
    dateTimeCalender.appendChild(dateTimeCalenderDates);
    return dateTimeCalender;
  }

  /** Generate the time interface **/
  function generateDateTimeModule_time() {
    // Create time elements
    var dateTimeTime                = document.createElement("div"),
        dateTimeTimeHour            = document.createElement("div"),
        dateTimeTimeMin             = document.createElement("div"),
        dateTimeTimeSeperator       = document.createElement("div"),
        dateTimeTimeHourIncrement   = document.createElement("span"),
        dateTimeTimeHourValue       = document.createElement("span"),
        dateTimeTimeHourDecrement   = document.createElement("span"),
        dateTimeTimeMinIncrement    = document.createElement("span"),
        dateTimeTimeMinValue        = document.createElement("span"),
        dateTimeTimeMinDecrement    = document.createElement("span");

    // Set classes for the time elements based on the mode
    if(pickerModeArray[pickerCounter] !== "datetime"){ dateTimeTime.className = "col-12 date-time-time-picker center-align"; }
    else { dateTimeTime.className = "col-4 col-m-12 date-time-time-picker center-align"; }

    // Set classes and id's to elements
    dateTimeTimeHour.className              = "col-4 time-container";
    dateTimeTimeMin.className               = "col-4 time-container";
    dateTimeTimeSeperator.className         = "col-4 time-separator";
    dateTimeTimeHourIncrement.className     = "time-increment";
    dateTimeTimeHourDecrement.className     = "time-decrement";
    dateTimeTimeMinIncrement.className      = "time-increment";
    dateTimeTimeMinDecrement.className      = "time-decrement";
    dateTimeTimeHourValue.className         = "time-hour";
    dateTimeTimeMinValue.className          = "time-min";
    dateTimeTimeHourValue.id                = "time-hour_" + pickerCounter;
    dateTimeTimeMinValue.id                 = "time-min_" + pickerCounter;

    // Set an onclick attribute to the elements
    dateTimeTimeHourIncrement.setAttribute("onClick", "dateTimePicker.incrementTime('hour')");
    dateTimeTimeHourDecrement.setAttribute("onClick", "dateTimePicker.decrementTime('hour')");
    dateTimeTimeMinIncrement.setAttribute("onClick", "dateTimePicker.incrementTime('min')");
    dateTimeTimeMinDecrement.setAttribute("onClick", "dateTimePicker.decrementTime('min')");

    // Set the content of the elements
    dateTimeTimeHourIncrement.innerHTML   = '&lt;';
    dateTimeTimeHourDecrement.innerHTML   = '&lt;';
    dateTimeTimeMinIncrement.innerHTML    = '&lt;';
    dateTimeTimeMinDecrement.innerHTML    = '&lt;';
    dateTimeTimeHourValue.innerHTML       = "00";
    dateTimeTimeSeperator.innerHTML       = ":";
    dateTimeTimeMinValue.innerHTML        = "00";

    // Append the time elements to the time parent and return the time module
    dateTimeTimeHour.appendChild(dateTimeTimeHourIncrement);
    dateTimeTimeHour.appendChild(dateTimeTimeHourValue);
    dateTimeTimeHour.appendChild(dateTimeTimeHourDecrement);
    dateTimeTimeMin.appendChild(dateTimeTimeMinIncrement);
    dateTimeTimeMin.appendChild(dateTimeTimeMinValue);
    dateTimeTimeMin.appendChild(dateTimeTimeMinDecrement);
    dateTimeTime.appendChild(dateTimeTimeHour);
    dateTimeTime.appendChild(dateTimeTimeSeperator);
    dateTimeTime.appendChild(dateTimeTimeMin);
    return dateTimeTime;
  }
  /*
    ################################
    DATE / TIME PICKER BUILDER - END
    ################################
  */

  /*
    ##########################################
    SHOW SET AND HIDE DATE TIME PICKER - START
    ##########################################
  */
  /* Show the date / time picker */
  function show(pickerID, theValue) {
    // Update tracking variables with info about the clicked picker
    pickerCurrentPicker     = "#dateTimePickerFor_" + pickerID;
    pickerCurrentPickerID   = pickerID;
    pickerCurrentValue      = theValue;

    // Get the picker element and make it visible
    var thePicker = elem(pickerCurrentPicker);
    thePicker.classList.remove("datetime-popup-hidden");
    thePicker.classList.add("datetime-popup-visible");

    // Initialise and render or update elements based on the pickers mode
    initialise();
    switch(pickerModeArray[pickerID]) {
      case "datetime":
        renderDaysCal();
        updateCurrentDateTime();
        updateTimeSelector();
        showHideCalsForMode();
        break;
      case "date":
        renderDaysCal();
        updateCurrentDateTime();
        showHideCalsForMode();
        break;
      case "month":
        renderMonthsCal();
        updateCurrentDateTime();
        showHideCalsForMode();
        break;
      case "time":
        updateTimeSelector();
        break;
    }
  }

  /* Hide the date / time picker */
  function close() {
    // Get the picker element and make it hidden
    var thePicker = elem(pickerCurrentPicker);
    thePicker.classList.add("datetime-popup-hidden");
    thePicker.classList.remove("datetime-popup-visible");
  }

  /* Set the input value to the select date / time then close the picker */
  function set() {
    // Get the input element
    var dateInputElem   = elem(pickerRootParentArray[pickerCurrentPickerID]),
        theInput        = dateInputElem.getElementsByTagName("input")[0];

    // Update the value of the input element based on the mode
    switch(pickerModeArray[pickerCurrentPickerID]) {
      case "datetime":
        theInput.value = selectedYear + "-" + dateTime.leadZero(selectedMonth + 1) + "-" + dateTime.leadZero(selectedDate) + " " +
          dateTime.leadZero(selectedTimeHour) + ":" + dateTime.leadZero(selectedTimeMin);
        break;
      case "date":
        theInput.value = selectedYear + "-" + dateTime.leadZero(selectedMonth + 1) + "-" + dateTime.leadZero(selectedDate);
        break;
      case "month":
        theInput.value = dateTime.textifyMonth(selectedMonth) + " " + selectedYear;
        break;
      case "time":
        theInput.value = dateTime.leadZero(selectedTimeHour) + ":" + dateTime.leadZero(selectedTimeMin);
        break;
    }

    // Close the picker
    close();
  }
  /*
    ########################################
    SHOW SET AND HIDE DATE TIME PICKER - END
    ########################################
  */

  /*
    #####################################
    INITIALISE, RENDER AND UPDATE - START
    #####################################
  */
  /* Initialise the date time picker */
  function initialise() {
    // Create variables and set the current mode of the calender to dates
    var initialDate;
    if(pickerModeArray[pickerCurrentPickerID] === "month") {
      currentMode = "months";
    } else { currentMode = "dates"; }

    // If the input has a date value set use that as default otherwise use the date / time
    if(pickerCurrentValue !== "") {
      if(pickerModeArray[pickerCurrentPickerID] === "time") {
        initialDate = new Date("2000-01-01 " + pickerCurrentValue);
      } else {
        initialDate = new Date(pickerCurrentValue);
      }
    } else {
      initialDate = new Date();
    }

    // Set up date / time variables
    selectedTimeHour  = initialDate.getHours();
    selectedTimeMin   = initialDate.getMinutes();
    currentMonth      = initialDate.getMonth();
    currentYear       = initialDate.getFullYear();
    selectedDate      = initialDate.getDate();
    selectedDay       = initialDate.getDay();
    selectedMonth     = initialDate.getMonth();
    selectedYear      = initialDate.getFullYear();
    yearRangeMin      = initialDate.getFullYear() - 5;
    yearRangeMax      = initialDate.getFullYear() + 6;
  }

  /* Update the currently selected date / time */
  function updateCurrentDateTime() {
    var currentDateElem   = elem("#datetime-selector-current-date_" + pickerCurrentPickerID),
        date              = dateTime.suffixDate(selectedDate),
        day               = dateTime.textifyWeekDay(selectedDay),
        month             = dateTime.textifyMonth(selectedMonth),
        hour              = dateTime.leadZero(selectedTimeHour),
        min               = dateTime.leadZero(selectedTimeMin),
        year              = selectedYear;

    switch(pickerModeArray[pickerCurrentPickerID]) {
      case "datetime":  currentDateElem.innerHTML = day + " " + date + " " + month + " " + year + " - " + hour + ":" + min; break;
      case "date":      currentDateElem.innerHTML = day + " " + date + " " + month + " " + year; break;
      case "month":     currentDateElem.innerHTML = month + " " + year; break;
      case "time":      currentDateElem.innerHTML = ""; currentDateElem.style.display = "none"; break;
    }
  }

  /** Time Selector - Start **/
  /** Get the hour and min elements **/
  function getTimeHourElem() { return elem("#time-hour_" + pickerCurrentPickerID); }
  function getTimeMinElem() { return elem("#time-min_" + pickerCurrentPickerID); }

  /** Increment the time value **/
  function incrementTime(hourMin) {
    switch(hourMin) {
      case "hour":  selectedTimeHour  = (selectedTimeHour !== 23)  ? selectedTimeHour + 1 : 0; break;
      case "min":   selectedTimeMin   = (selectedTimeMin !== 59)   ? selectedTimeMin + 1 : 0; break;
    }
    updateTimeSelector();
  }

  /** Decrement the time value **/
  function decrementTime(hourMin) {
    switch(hourMin) {
      case "hour":  selectedTimeHour  = (selectedTimeHour !== 0)   ? selectedTimeHour - 1 : 23; break;
      case "min":   selectedTimeMin   = (selectedTimeMin !== 0)    ? selectedTimeMin - 1 : 59; break;
    }
    updateTimeSelector();
  }

  /** Update the time view **/
  function updateTimeSelector() {
    getTimeHourElem().innerHTML = dateTime.leadZero(selectedTimeHour);
    getTimeMinElem().innerHTML  = dateTime.leadZero(selectedTimeMin);
    updateCurrentDateTime();
  }
  /** Time Selector - End **/


  /** Date Selector **/
  /** Get the number of days in the month and the first weekday in the month **/
  function getDaysInMonth(month, year) { return new Date(year, month + 1, 0).getDate(); }
  function getFirstWeekDayInMonth(month, year) { return new Date(year, month, 1).getDay(); }

  /** Render the calender  **/
  function renderDaysCal() {
    // Setup variables
    var daysInMonth       = getDaysInMonth(currentMonth, currentYear),
        firstWeekDay      = getFirstWeekDayInMonth(currentMonth, currentYear),
        rowCounter        = 1,
        colCounter        = 0,
        monthDayCounter   = 1,
        today             = new Date(),
        dateModeHeader;

    // Setup first week day number
    firstWeekDay--;
    if(firstWeekDay === -1) { firstWeekDay = 6; }

    // Set the calender header to show the current month and year
    dateModeHeader = elem("#date-mode-header_" + pickerCurrentPickerID);
    dateModeHeader.innerHTML = dateTime.textifyMonth(currentMonth) + " " + currentYear;

    // Work through the grid and set the date as required
    for (var i = 1; i <= 42; i++) {
      var currentCoords       = rowCounter + "-" + colCounter,
          currentCalGridElem  = elem("#dates-" + currentCoords + "_" + pickerCurrentPickerID);

      // Clear the following classes from the element
      currentCalGridElem.classList.remove("cal-grid-day-today");
      currentCalGridElem.classList.remove("cal-grid-day-disabled");
      currentCalGridElem.classList.remove("cal-grid-day-selected");

      // Disable and don't print any data to cells in the first row before the first day of the month OR
      // Disable and don't print any data to cells after the last day of the month
      if ((rowCounter === 1 && colCounter < firstWeekDay) || (monthDayCounter > daysInMonth)) {
        // Disable the cell
        currentCalGridElem.innerHTML = "";
        currentCalGridElem.classList.add("cal-grid-day-disabled");
      } else {
        // Print the date to the cell
        currentCalGridElem.innerHTML = monthDayCounter;
        currentCalGridElem.setAttribute("onClick", "dateTimePicker.selectCalDate(" + colCounter + ", " + monthDayCounter + ")");

        // Check to see if the current cell matches todays date
        if (monthDayCounter <= daysInMonth) {
          if((today.getDate() === monthDayCounter) &&
            (today.getMonth() === currentMonth) &&
            (today.getFullYear() === currentYear)) {
            // If the cell is todays date add the today class to it
            currentCalGridElem.classList.add("cal-grid-day-today");
          }
        }

        // Check to see if the current cell is the user selected date
        if((monthDayCounter === selectedDate) &&
          (currentMonth === selectedMonth) &&
          (currentYear === selectedYear)) {
          // IF the cell is the selected date add the selected class to it
          currentCalGridElem.classList.add("cal-grid-day-selected");
        }

        // Increment the month day counter by 1
        monthDayCounter++;
      }

      // Update the row and col tracking to move to next cell
      rowCounter = colCounter === 6 ? rowCounter += 1 : rowCounter;
      colCounter = colCounter === 6 ? colCounter = 0 : colCounter += 1;
    }
  }

  /** Render the months calender **/
  function renderMonthsCal() {
    // Setup variables
    var rowCounter      = 1,
        colCounter      = 0,
        today           = new Date(),
        dateModeHeader;

    // Set the calender header to the current year
    dateModeHeader            = elem("#date-mode-header_" + pickerCurrentPickerID);
    dateModeHeader.innerHTML  = currentYear;

    // Loop 12 times
    for (var i = 0; i < 12; i++) {
      var currentCoords       = rowCounter + "-" + colCounter,
          currentCalGridElem  = elem("#months-" + currentCoords + "_" + pickerCurrentPickerID);

      // Remove classes and set an onclick attribute
      currentCalGridElem.classList.remove("cal-grid-month-today");
      currentCalGridElem.classList.remove("cal-grid-month-selected");
      currentCalGridElem.setAttribute("onClick", "dateTimePicker.selectCalMonth(" + i + ")");

      // Check to see if the current month is the current selected month
      if ((i === selectedMonth) && (currentYear === selectedYear)) {
        currentCalGridElem.classList.add("cal-grid-month-selected");
      }

      // Check to see if the current month is todays month
      if(today.getFullYear() === currentYear && today.getMonth() === i) {
        currentCalGridElem.classList.add("cal-grid-month-today");
      }

      // Increment the row and col counters
      rowCounter = colCounter === 3 ? rowCounter += 1 : rowCounter;
      colCounter = colCounter === 3 ? colCounter = 0 : colCounter += 1;
    }
  }

  /** Render the years calender **/
  function renderYearsCal() {
    var rowCounter      = 1,
        colCounter      = 0,
        yearCounter     = yearRangeMin,
        today           = new Date(),
        dateModeHeader;

    // Set the calender header to the current year range
    dateModeHeader            = elem("#date-mode-header_" + pickerCurrentPickerID);
    dateModeHeader.innerHTML  = yearRangeMin + " - " + yearRangeMax;

    // Loop 12 times
    for (var i = 0; i < 12; i++) {
      var currentCoords       = rowCounter + "-" + colCounter,
          currentCalGridElem  = elem("#years-" + currentCoords + "_" + pickerCurrentPickerID);

      // Remove classes, set onclick attribute and add content
      currentCalGridElem.classList.remove("cal-grid-year-today");
      currentCalGridElem.classList.remove("cal-grid-year-selected");
      currentCalGridElem.innerHTML = yearCounter;
      currentCalGridElem.setAttribute("onClick", "dateTimePicker.selectCalYear(" + yearCounter + ")");

      // If the current year equals the selected year add the selected class
      if (yearCounter === selectedYear) { currentCalGridElem.classList.add("cal-grid-year-selected"); }

      // If the current year equals todays year add the today class
      if(today.getFullYear() === yearCounter) { currentCalGridElem.classList.add("cal-grid-year-today"); }

      // Increment the year and row / col counters
      yearCounter++;
      rowCounter = colCounter === 3 ? rowCounter += 1 : rowCounter;
      colCounter = colCounter === 3 ? colCounter = 0 : colCounter += 1;
    }
  }

  /** Decide on what calender to show **/
  function showHideCalsForMode() {
    switch(currentMode) {
      case "dates":   showDatesCal(); hideMonthsCal(); renderDaysCal(); break;
      case "months":  showMonthsCal(); hideDatesCal(); hideYearsCal(); renderMonthsCal(); break;
      case "years":   showYearsCal(); hideMonthsCal(); renderYearsCal(); break;
    }
  }

  /** Functions to show the calenders **/
  function showDatesCal()   { elem("#date-cal-days_" + pickerCurrentPickerID).classList.add("date-time-cal-visible"); }
  function showMonthsCal()  { elem("#date-cal-months_" + pickerCurrentPickerID).classList.add("date-time-cal-visible"); }
  function showYearsCal()   { elem("#date-cal-years_" + pickerCurrentPickerID).classList.add("date-time-cal-visible"); }

  /** Functions to hide the calenders **/
  function hideDatesCal()   { elem("#date-cal-days_" + pickerCurrentPickerID).classList.remove("date-time-cal-visible"); }
  function hideMonthsCal()  { elem("#date-cal-months_" + pickerCurrentPickerID).classList.remove("date-time-cal-visible"); }
  function hideYearsCal()   { elem("#date-cal-years_" + pickerCurrentPickerID).classList.remove("date-time-cal-visible"); }

  /** Change the current mode of the calender **/
  function changeCalMode() {
    switch(currentMode) {
      case "dates":   currentMode = "months"; break;
      case "months":  currentMode = "years"; break;
    }
    showHideCalsForMode();
  }

  /** Decrement the current calender value **/
  function decrementCal() {
    switch(currentMode) {
      case "dates":   decrementCurrentMonth(); renderDaysCal(); break;
      case "months":  decrementcurrentYear(); renderMonthsCal(); break;
      case "years":   decrementYearRange(); renderYearsCal(); break;
    }
  }

  /** Increment the current calender value **/
  function incrementCal() {
    switch(currentMode) {
      case "dates":   incrementCurrentMonth(); renderDaysCal(); break;
      case "months":  incrementCurrentYear(); renderMonthsCal(); break;
      case "years":   incrementYearRange(); renderYearsCal(); break;
    }
  }

  /** Increment the current month **/
  function incrementCurrentMonth() {
    if(currentMonth === 11) { incrementCurrentYear(); currentMonth = 0; }
    else { currentMonth++; }
  }

  /** Decrement the current month **/
  function decrementCurrentMonth() {
    if(currentMonth === 0) { decrementcurrentYear(); currentMonth = 11; }
    else { currentMonth--; }
  }

  /** Increment and Decrement current year functions **/
  function incrementCurrentYear() { currentYear++; }
  function decrementcurrentYear() { currentYear--; }

  /** Increment current year range **/
  function incrementYearRange() {
    yearRangeMin += 12;
    yearRangeMax += 12;
  }

  /** Decrement current year range **/
  function decrementYearRange() {
    yearRangeMin -= 12;
    yearRangeMax -= 12;
  }

  /** Update the user selected date **/
  function selectCalDate(theDay, theDate) {
    selectedDay     = theDay;
    selectedDate    = theDate;
    selectedMonth   = currentMonth;
    selectedYear    = currentYear;
    renderDaysCal();
    updateCurrentDateTime();
  }

  /** Update the user select month and go back to the dates calender **/
  function selectCalMonth(theMonth) {
    currentMonth  = theMonth;

    if(pickerModeArray[pickerCurrentPickerID] === "month") {
      selectedMonth   = currentMonth;
      selectedYear    = currentYear;
      renderMonthsCal();
      updateCurrentDateTime();
    } else {
      currentMode   = "dates";
      showHideCalsForMode();
    }
  }

  /** Update the user selected year and go back to the months calender **/
  function selectCalYear(theYear) {
    currentYear   = theYear;
    currentMode   = "months";
    showHideCalsForMode();
  }
  /*
    ###################################
    INITIALISE, RENDER AND UPDATE - END
    ###################################
  */


  /*
    ################################
    PUBLIC EXPOSED FUNCTIONS - START
    ################################
  */
  return {
    create:             function (args) {return create(args)},
    show:               function (id, value) {return show(id, value)},
    close:              function () {return close()},
    set:                function () {return set()},

    incrementTime:      function (hourMin) {return incrementTime(hourMin)},
    decrementTime:      function (hourMin) {return decrementTime(hourMin)},

    selectCalDate:      function (theDay, theDate) {return selectCalDate(theDay, theDate)},
    selectCalMonth:     function (theMonth) {return selectCalMonth(theMonth)},
    selectCalYear:      function (theYear) {return selectCalYear(theYear)},
    incrementCal:       function () {return incrementCal()},
    decrementCal:       function () {return decrementCal()},
    changeCalMode:      function () {return changeCalMode()}
  }
  /*
    ##############################
    PUBLIC EXPOSED FUNCTIONS - END
    ##############################
  */
})();
