var analogueClock = (function() {
  // Clock variables
  var clockCounter                = 0;
  var clockArgsArray              = [];
  var clockRotationCounterArray   = [];

  // Function to create a new analogue clock
  function create(args) {
    // Add and setup clock information in storage arrays
    clockArgsArray[clockCounter] = args;
    clockRotationCounterArray[clockCounter] = {
      hourRotationCounter: 0,
      minuteRotationCounter: 0,
      secondRotationCounter: 0
    }

    // Check that the clockID was given
    if(args.clockID) {
      buildAnalogueClock(clockCounter);
      renderAnalogueClock(clockCounter);
    } else {
      console.log("Analogue clock error - clockID required");
    }

    // Increment the clock counter
    clockCounter++;
  }

  // Function to generate the HTML elements required for the clock
  function buildAnalogueClock(clockArgsIndex) {
    // Variables to hold the clock elements
    var clockHolder             = elem("#" + clockArgsArray[clockArgsIndex].clockID)
    var clockFace               = document.createElement("div");
    var clockHands              = document.createElement("div");
    var clockFaceMajorMarkers   = document.createElement("div");
    var clockFaceMinorMarkers   = document.createElement("div");
    var clockHandPoint          = document.createElement("div");
    var clockHandHour           = document.createElement("div");
    var clockHandMinute         = document.createElement("div");
    var clockHandSecond         = document.createElement("div");
    var handPointSpan           = document.createElement("span");
    var handHourSpan            = document.createElement("span");
    var handMinSpan             = document.createElement("span");
    var handSecSpan             = document.createElement("span");

    // Add classes to the clock face and hand div elements
    clockFace.classList.add("clock-face");
    clockHands.classList.add("clock-hands");
    clockFaceMajorMarkers.classList.add("clock-face-markers");
    clockFaceMinorMarkers.classList.add("clock-face-markers");

    // Create the major markers on the clock face - hour markers
    for(var i = 0; i < 12; i++) {
      var majorFaceMarker   = document.createElement("div");
      var markerSpan        = document.createElement("span");

      // If the clock face style wants numbers
      if(clockArgsArray[clockArgsIndex].clockFace == "numbers") {
        majorFaceMarker.classList.add("clock-face-numbers");

        // Scale the numbers based on the clock width
        markerSpan.style.fontSize = clockHolder.clientWidth / 8 + "px";

        if(i == 0) {
          markerSpan.innerHTML = "12";
        } else {
          markerSpan.innerHTML = i;
        }
      } else {
        majorFaceMarker.classList.add("clock-face-major-marker");
      }

      // Add the elements to the parent elements
      majorFaceMarker.appendChild(markerSpan);
      clockFaceMajorMarkers.appendChild(majorFaceMarker);
    }

    // If no clock face was defined
    if(!clockArgsArray[clockArgsIndex].clockFace) {
      // Create the minor markers on the clock face - minute markers
      for(var i = 0; i < 48; i++) {
        var minorFaceMarker   = document.createElement("div");
        var markerSpan        = document.createElement("span");

        // Add classes and add the elements to the parent elements
        minorFaceMarker.classList.add("clock-face-minor-marker");
        minorFaceMarker.appendChild(markerSpan);
        clockFaceMinorMarkers.appendChild(minorFaceMarker);
      }
    }

    // Add classes to the hand elements
    clockHandPoint.classList.add("clock-hand-point");
    clockHandHour.classList.add("clock-hand-hour");
    clockHandMinute.classList.add("clock-hand-minute");
    clockHandSecond.classList.add("clock-hand-second");

    // Setup the chosen tick style if one was defined
    switch(clockArgsArray[clockArgsIndex].tickStyle) {
      case "smooth":
        clockHandHour.classList.add("smooth-tick");
        clockHandMinute.classList.add("smooth-tick");
        clockHandSecond.classList.add("smooth-tick");
        break;
      case "bounce":
        clockHandHour.classList.add("bounce-tick");
        clockHandMinute.classList.add("bounce-tick");
        clockHandSecond.classList.add("bounce-tick");
        break;
    }

    // Add IDs to the clock hands
    clockHandHour.id    = clockArgsArray[clockArgsIndex].clockID + "-hour-hand";
    clockHandMinute.id  = clockArgsArray[clockArgsIndex].clockID + "-minute-hand";
    clockHandSecond.id  = clockArgsArray[clockArgsIndex].clockID + "-second-hand";

    // Add the elements to their parent elements
    clockFace.appendChild(clockFaceMajorMarkers);
    clockFace.appendChild(clockFaceMinorMarkers);
    clockHandPoint.appendChild(handPointSpan);
    clockHandHour.appendChild(handHourSpan);
    clockHandMinute.appendChild(handMinSpan);
    clockHandSecond.appendChild(handSecSpan);
    clockHands.appendChild(clockHandPoint);
    clockHands.appendChild(clockHandHour);
    clockHands.appendChild(clockHandMinute);
    clockHands.appendChild(clockHandSecond);
    clockHolder.appendChild(clockFace);
    clockHolder.appendChild(clockHands);
  }

  // Render the clock and make it tick
  function renderAnalogueClock(clockArgsIndex) {
    // Get the elements for the clock hands
    var date        = getClockTime(clockArgsIndex);
    var hourHand    = elem("#" + clockArgsArray[clockArgsIndex].clockID + "-hour-hand");
    var minuteHand  = elem("#" + clockArgsArray[clockArgsIndex].clockID + "-minute-hand");
    var secondHand  = elem("#" + clockArgsArray[clockArgsIndex].clockID + "-second-hand");

    // Set the degree of rotation for the hands
    var secDegree   = (date.seconds / 60) * 360;
    var minDegree   = ((date.minutes / 60) * 360) + ((date.seconds / 60) * 6);
    var hourDegree  = ((date.hours / 12) * 360) + ((date.minutes / 60) * 30) + (date.seconds / 60 * 0.5);

    // Track how many times the hand has rotated
    if(hourDegree == 0) {clockRotationCounterArray[clockArgsIndex].hourRotationCounter++}
    if(minDegree == 0)  {clockRotationCounterArray[clockArgsIndex].minuteRotationCounter++}
    if(secDegree == 0)  {clockRotationCounterArray[clockArgsIndex].secondRotationCounter++}

    // Add the number of previous rotations to the clock hands
    hourDegree  += clockRotationCounterArray[clockArgsIndex].hourRotationCounter * 720;
    minDegree   += clockRotationCounterArray[clockArgsIndex].minuteRotationCounter * 360;
    secDegree   += clockRotationCounterArray[clockArgsIndex].secondRotationCounter * 360;

    // Rotate the hands
    secondHand.style.transform  = "rotate(" + secDegree + "deg)";
    minuteHand.style.transform  = "rotate(" + minDegree + "deg)";
    hourHand.style.transform    = "rotate(" + hourDegree + "deg)";

    // Recall the function after a second
    setTimeout(renderAnalogueClock, 1000, clockArgsIndex);
  }

  // Get the time to display on the clock
  function getClockTime(clockArgsIndex) {
    var theDate = new Date();
    var theHours, theMinutes, theSeconds = 0;

    // Offset the time if required
    if(clockArgsArray[clockArgsIndex].utcOffset) {
      // Slice up the offset string into its components
      var plusMinus     = clockArgsArray[clockArgsIndex].utcOffset.slice(0, 1);
      var hourOffset    = clockArgsArray[clockArgsIndex].utcOffset.slice(1, 3);
      var minuteOffset  = clockArgsArray[clockArgsIndex].utcOffset.slice(4, 6);

      // Get the current UTC time
      theHours    = theDate.getUTCHours();
      theMinutes  = theDate.getUTCMinutes();
      theSeconds  = theDate.getUTCSeconds();

      // Add or minus time depending on the offset
      if(plusMinus == "+") {
        theHours    += parseInt(hourOffset);
        theMinutes  += parseInt(minuteOffset);
      } else if(plusMinus == "-") {
        theHours    -= parseInt(hourOffset);
        theMinutes  -= parseInt(minuteOffset);
      } else {
        console.log("Invalid offset operator - +/- only");
      }
    } else {
      // Get the current system time
      theHours    = theDate.getHours();
      theMinutes  = theDate.getMinutes();
      theSeconds  = theDate.getSeconds();
    }

    // Return the time values
    return {
      hours   : theHours,
      minutes : theMinutes,
      seconds : theSeconds
    };
  }

  // Expose public functions
  return {
    create: function(args) {return create(args)}
  }
})();
