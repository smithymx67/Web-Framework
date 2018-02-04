<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <title>Web Framework | Scripts | Date Time</title>
    <?php require_once "../includes/header.php"; ?>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="col-12">
          <h1>Web Framework - Scripts - Date Time</h1>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="col-12">
        <div class="header-text">
          <h1>Date Time</h1>
          <p>Functions that help with date and time handling.</p>
        </div>
      </div>

      <div class="col-12">
        <a href="<?php echo ROOT_DOCSITE_URL . "/scripts/"; ?>" title="Scripts">Go Back</a>
      </div>

      <div class="col-12">
        <h2><code>textifyMonth(<i>[int]month</i>)</code></h2>
        <p>This function takes in a month number and returns the months name.</p>
        <p>Valid month numbers are 0 - 11 where 0 returns January and 11 returns December.</p>

        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Output: March</span><br>
          <span>textifyMonth(2);</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Output: March</span><br>
          <span>dateTime.textifyMonth(2);</span>
        </div>

        <br><br><br>

        <h2><code>textifyWeekDay(<i>[int]day</i>)</code></h2>
        <p>This function takes in a day number and returns the days name.</p>
        <p>Valid day numbers are 0 - 6 where 0 returns Sunday and 6 returns Saturday.</p>

        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Output: Thursday</span><br>
          <span>textifyWeekDay(4);</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Output: Thursday</span><br>
          <span>dateTime.textifyWeekDay(4);</span>
        </div>

        <br><br><br>

        <h2><code>get12HrTime(<i>[Date]dateObj</i>, <i>[bool]showSecs</i>, <i>[bool]showAMPM</i>)</code></h2>
        <p>This function takes in a date object and two boolean values. It returns the time in 12 hour format.</p>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: 7:37</span><br>
          <span>get12HrTime(new Date(), false, false);</span><br>
          <br>
          <span>// Example output: 7:37 PM</span><br>
          <span>get12HrTime(new Date(), false, true);</span><br>
          <br>
          <span>// Example output: 7:37:30</span><br>
          <span>get12HrTime(new Date(), true, false);</span><br>
          <br>
          <span>// Example output: 7:37:30 PM</span><br>
          <span>get12HrTime(new Date(), true, true);</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: 7:37</span><br>
          <span>dateTime.get12HrTime(new Date(), false, false);</span><br>
          <br>
          <span>// Example output: 7:37 PM</span><br>
          <span>dateTime.get12HrTime(new Date(), false, true);</span><br>
          <br>
          <span>// Example output: 7:37:30</span><br>
          <span>dateTime.get12HrTime(new Date(), true, false);</span><br>
          <br>
          <span>// Example output: 7:37:30 PM</span><br>
          <span>dateTime.get12HrTime(new Date(), true, true);</span>
        </div>

        <br><br><br>

        <h2><code>get24HrTime(<i>[Date]dateObj</i>, <i>[bool]showSecs</i>)</code></h2>
        <p>This function takes in a date object and a boolean value. It returns the time in 24 hour format.</p>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: 18:28</span><br>
          <span>get24HrTime(new Date(), false);</span><br>
          <br>
          <span>// Example output: 18:28:12</span><br>
          <span>get24HrTime(new Date(), true);</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: 18:28</span><br>
          <span>dateTime.get24HrTime(new Date(), false);</span><br>
          <br>
          <span>// Example output: 18:28:12</span><br>
          <span>dateTime.get24HrTime(new Date(), true);</span>
        </div>

        <br><br><br>

        <h2><code>getShortDate(<i>[Date]dateObj</i>)</code></h2>
        <p>This function takes in a date object and returns the date in the following format DD/MM/YYYY.</p>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: 21/04/2017</span><br>
          <span>getShortDate(new Date());</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: 21/04/2017</span><br>
          <span>dateTime.getShortDate(new Date());</span>
        </div>

        <br><br><br>

        <h2><code>getLongDate(<i>[Date]dateObj</i>)</code></h2>
        <p>This function takes in a date object and returns the date in the following format Day Date Month Year.</p>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: Saturday 19th August 2017</span><br>
          <span>getLongDate(new Date());</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// Example output: Saturday 19th August 2017</span><br>
          <span>dateTime.getLongDate(new Date());</span>
        </div>

        <br><br><br>

        <h2><code>leadZero(<i>[int] number</i>)</code></h2>
        <p>This function takes in a number and returns it with a leading zero is needed.</p>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// 3 => 03</span><br>
          <span>leadZero(3);</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// 3 => 03</span><br>
          <span>dateTime.leadZero(3);</span>
        </div>

        <br><br><br>

        <h2><code>suffixDate(<i>[int] date</i>)</code></h2>
        <p>This function takes in a number and returns it with the correct suffix (st, nd, rd or th)</p>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// 1 => 1st, 2 => 2nd, 3 => 3rd, 4 => 4th</span><br>
          <span>suffixDate(2)</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>// 1 => 1st, 2 => 2nd, 3 => 3rd, 4 => 4th</span><br>
          <span>dateTime.suffixDate(2)</span>
        </div>
      </div>
    </div>

    <?php require_once "../includes/footer.php"; ?>
    <script>
      consoleLog.normal(dateTime.textifyMonth(2));
      consoleLog.normal(dateTime.textifyWeekDay(4));
      consoleLog.normal(dateTime.get12HrTime(new Date(), true, true));
      consoleLog.normal(dateTime.get12HrTime(new Date(), true, false));
      consoleLog.normal(dateTime.get12HrTime(new Date(), false, true));
      consoleLog.normal(dateTime.get12HrTime(new Date(), false, false));
      consoleLog.normal(dateTime.get24HrTime(new Date(), true));
      consoleLog.normal(dateTime.get24HrTime(new Date(), false));
      consoleLog.normal(dateTime.getShortDate(new Date()));
      consoleLog.normal(dateTime.getLongDate(new Date()));
    </script>
  </body>
</html>