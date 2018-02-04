<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <title>Web Framework | Scripts | Date Time Picker</title>
    <?php require_once "../includes/header.php"; ?>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="col-12">
          <h1>Web Framework - Scripts - Date Time Picker</h1>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="col-12">
        <div class="header-text">
          <h1>Date Time Picker</h1>
          <p>Ability to create a simple clean date / time picker.</p>
        </div>
      </div>

      <div class="col-12">
        <a href="<?php echo ROOT_DOCSITE_URL . "/scripts/"; ?>" title="Scripts">Go Back</a>
      </div>

      <div class="col-12">
        <div class="dialog warning-dialog">
          <p>The following features require both the CSS and JavaScript libraries.</p>
        </div>
      </div>

      <div class="col-12">
        <h2>Datetime Picker</h2>
        <p>Added v1.2.0</p>
        <p>Creates a popup selector window which allows the user to select a date and a time.</p>

        <h3>HTML</h3>
        <div class="code-block">
          <span>&lt;div id="dateTimePicker1"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;label for="datetime-picker"&gt;Datetime Picker&lt;/label&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;input type="text" id="datetime-picker" name="datetime-picker"&gt;</span><br>
          <span>&lt;/div&gt;</span>
        </div>

        <h3>JavaScript</h3>
        <div class="code-block">
          <span>var args1 = {</span><br>
          <span>&nbsp;&nbsp;// Required arguments</span><br>
          <span>&nbsp;&nbsp;dateInputID: "#dateTimePicker1",</span><br>
          <span>&nbsp;&nbsp;mode: "datetime"</span><br>
          <span>};</span><br>
          <br>
          <span>dateTimePicker.create(args1);</span>
        </div>
      </div>

      <div class="col-12">
        <h2>Date Picker</h2>
        <p>Added v1.2.0</p>
        <p>Creates a popup selector window which allows the user to select only a date.</p>

        <h3>HTML</h3>
        <div class="code-block">
          <span>&lt;div id="dateTimePicker2"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;label for="date-picker"&gt;Date Picker&lt;/label&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;input type="text" id="date-picker" name="date-picker"&gt;</span><br>
          <span>&lt;/div&gt;</span>
        </div>

        <h3>JavaScript</h3>
        <div class="code-block">
          <span>var args2 = {</span><br>
          <span>&nbsp;&nbsp;// Required arguments</span><br>
          <span>&nbsp;&nbsp;dateInputID: "#dateTimePicker2",</span><br>
          <span>&nbsp;&nbsp;mode: "date"</span><br>
          <span>};</span><br>
          <br>
          <span>dateTimePicker.create(args2);</span>
        </div>
      </div>

      <div class="col-12">
        <h2>Month Picker</h2>
        <p>Added v1.2.0</p>
        <p>Creates a popup selector window which allows the user to select only a month and year.</p>

        <h3>HTML</h3>
        <div class="code-block">
          <span>&lt;div id="dateTimePicker3"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;label for="month-picker"&gt;Month Picker&lt;/label&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;input type="text" id="month-picker" name="month-picker"&gt;</span><br>
          <span>&lt;/div&gt;</span>
        </div>

        <h3>JavaScript</h3>
        <div class="code-block">
          <span>var args3 = {</span><br>
          <span>&nbsp;&nbsp;// Required arguments</span><br>
          <span>&nbsp;&nbsp;dateInputID: "#dateTimePicker3",</span><br>
          <span>&nbsp;&nbsp;mode: "month"</span><br>
          <span>};</span><br>
          <br>
          <span>dateTimePicker.create(args3);</span>
        </div>
      </div>

      <div class="col-12">
        <h2>Time Picker</h2>
        <p>Added v1.2.0</p>
        <p>Creates a popup selector window which allows the user to select only a time.</p>

        <h3>HTML</h3>
        <div class="code-block">
          <span>&lt;div id="dateTimePicker4"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;label for="time-picker"&gt;Time Picker&lt;/label&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;input type="text" id="time-picker" name="time-picker"&gt;</span><br>
          <span>&lt;/div&gt;</span>
        </div>

        <h3>JavaScript</h3>
        <div class="code-block">
          <span>var args4 = {</span><br>
          <span>&nbsp;&nbsp;// Required arguments</span><br>
          <span>&nbsp;&nbsp;dateInputID: "#dateTimePicker4",</span><br>
          <span>&nbsp;&nbsp;mode: "time"</span><br>
          <span>};</span><br>
          <br>
          <span>dateTimePicker.create(args4);</span>
        </div>
      </div>

      <div class="col-12">
        <h2>Examples</h2>
        <div id="dateTimePicker1">
          <label for="datetime-picker">Datetime Picker</label>
          <input type="text" id="datetime-picker" name="datetime-picker">
        </div>

        <div id="dateTimePicker2">
          <label for=date-picker>Date Picker</label>
          <input type="text" id="date-picker" name="date-picker">
        </div>

        <div id="dateTimePicker3">
          <label for=month-picker>Month Picker</label>
          <input type="text" id="month-picker" name="month-picker">
        </div>

        <div id="dateTimePicker4">
          <label for=time-picker>Time Picker</label>
          <input type="text" id="time-picker" name="time-picker">
        </div>
      </div>
    </div>

    <?php require_once "../includes/footer.php"; ?>
    <script type="text/javascript">
      var args1 = {
        dateInputID: "#dateTimePicker1",
        mode: "datetime"
      };

      var args2 = {
        dateInputID: "#dateTimePicker2",
        mode: "date"
      };

      var args3 = {
        dateInputID: "#dateTimePicker3",
        mode: "month"
      };

      var args4 = {
        dateInputID: "#dateTimePicker4",
        mode: "time"
      };

      dateTimePicker.create(args1);
      dateTimePicker.create(args2);
      dateTimePicker.create(args3);
      dateTimePicker.create(args4);
    </script>
  </body>
</html>