<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <title>Web Framework | Scripts | Analouge Clocks</title>
    <?php require_once "../includes/header.php"; ?>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="col-12">
          <h1>Web Framework - Scripts - Analouge Clocks</h1>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="col-12">
        <div class="header-text">
          <h1>Analouge Clocks</h1>
          <p>Display an analouge clock on the screen</p>
        </div>
      </div>

      <div class="col-12">
        <a href="<?php echo ROOT_DOCSITE_URL . "/scripts/"; ?>" title="Scripts">Go Back</a>
      </div>

      <div class="col-4 col-m-6 col-s-12 center-align">
        <div class="clock-holder" id="clock1"></div>
        <h2>Clock Example 1</h2>
        <p>Default style</p>
      </div>

      <div class="col-4 col-m-6 col-s-12 center-align">
        <div class="clock-holder" id="clock2"></div>
        <h2>Clock Example 2</h2>
        <p>Default clock face, +02:00 UTC offset and smooth tick style</p>
      </div>

      <div class="col-4 col-m-6 col-s-12 center-align">
        <div class="clock-holder" id="clock3"></div>
        <h2>Clock Example 3</h2>
        <p>Numbered clock face, -03:00 UTC offset and bounce tick style</p>
      </div>

      <div class="col-12">
        <p class="width-6 width-l-12">Clocks must have a <code>clockID</code>
          value passed, this links the clock to the HTML element. Optional values
          include <code>utcOffset</code>, <code>tickStyle</code> and <code>clockFace</code>.</p>
        <p class="width-6 width-l-12">By default the clock will use the
          systems time, the tick style will be a jump style and the clock face will
          show major and minor notches, an example of a default clock is shown in
          clock example 1 at the top of the page.</p>

        <br>
        <p><strong><code>utcOffset</code></strong></p>
        <p class="width-6 width-l-12">Offset the time from UTC time,
          the format is <code>+/-HH:MM</code>, for example <code>+04:30</code> or
          <code>-02:00</code>.</p>

        <br>
        <p><strong><code>tickStyle</code></strong></p>
        <p class="width-6 width-l-12">Alter the tick style with
          <code>smooth</code> or <code>bounce</code>. The effect of <code>smooth</code>
          is shown in clock example 2 and <code>bounce</code> is shown in clock
          example 3.</p>

        <br>
        <p><strong><code>clockFace</code></strong></p>
        <p class="width-6 width-l-12">Change the clock face, currently
          there are only two faces, the default and <code>numbers</code>. The
          numbers face is shown in clock example 3.</p>
        </ul>
      </div>

      <div class="col-12">
        <p>Added v1.3.0</p>
        <p>Create an analogue clock.</p>

        <h3>HTML</h3>
        <div class="code-block width-6 width-l-12">
          <span>&lt;!-- The id can be anything, it is used to identify the clock --&gt;</span><br>
          <span>&lt;div class="clock-holder" id="clock1"&gt;&lt;/div&gt;</span>
        </div>

        <h3>JavaScript</h3>
        <div class="code-block width-6 width-l-12">
          <span>var args3 = {</span><br>
          <span>&nbsp;&nbsp;// Required</span><br>
          <span>&nbsp;&nbsp;clockID: "clock3",</span><br>
          <br>
          <span>&nbsp;&nbsp;// Optional</span><br>
          <span>&nbsp;&nbsp;utcOffset: "-03:00",</span><br>
          <span>&nbsp;&nbsp;tickStyle: "bounce",</span><br>
          <span>&nbsp;&nbsp;clockFace: "numbers"</span><br>
          <span>}</span>
        </div>
      </div>
    </div>

    <?php require_once "../includes/footer.php"; ?>
    <script type="text/javascript">
      var args1 = {
        // Required
        clockID: "clock1"
      }

      var args2 = {
        // Required
        clockID: "clock2",

        // Optional
        utcOffset: "+02:00",
        tickStyle: "smooth"
      }

      var args3 = {
        // Required
        clockID: "clock3",

        // Optional
        utcOffset: "-03:00",
        tickStyle: "bounce",
        clockFace: "numbers"
      }

      analogueClock.create(args1);
      analogueClock.create(args2);
      analogueClock.create(args3);
    </script>
  </body>
</html>
