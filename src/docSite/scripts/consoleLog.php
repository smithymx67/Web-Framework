<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
  <head>
    <title>Web Framework | Scripts | Console Log</title>
    <?php require_once "../includes/header.php"; ?>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="col-12">
          <h1>Web Framework - Scripts - Console Log</h1>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="col-12">
        <div class="header-text">
          <h1>Console Log</h1>
          <p>Logging to the browsers console. View the console to see the output of the function.</p>
        </div>
      </div>

      <div class="col-12">
        <a href="<?php echo ROOT_DOCSITE_URL . "/scripts/"; ?>" title="Scripts">Go Back</a>
      </div>

      <div class="col-12">
        <h2>Default Log</h2>
        <p>Prints black text to the console.</p>
        <br>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog("Default console log");</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog.normal("Default console log");</span>
        </div>

        <br>

        <h2>Information Log</h2>
        <p>Prints blue text to the console.</p>
        <br>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog("Information console log", "info");</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog.info("Information console log");</span>
        </div>

        <br>

        <h2>Success Log</h2>
        <p>Prints green text to the console.</p>
        <br>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog("Success console log", "success");</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog.success("Success console log");</span>
        </div>

        <br>

        <h2>Warning Log</h2>
        <p>Prints orange text to the console.</p>
        <br>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog("Warning console log", "warning");</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog.warning("Warning console log");</span>
        </div>

        <br>

        <h2>Danger Log</h2>
        <p>Prints red text to the console.</p>
        <br>
        <p>Added v1.0.0</p>
        <p>Removed v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog("Danger console log", "danger");</span>
        </div>
        <br>
        <p>Added v1.2.0</p>
        <div class="code-block width-6 width-l-12">
          <span>consoleLog.danger("Danger console log");</span>
        </div>
      </div>
    </div>

    <?php require_once "../includes/footer.php"; ?>
    <script type="text/javascript">
      // Default console log
      consoleLog.normal("Default console log");

      // Information console log
      consoleLog.info("Information console log");

      // Success console log
      consoleLog.success("Success console log");

      // Warning console log
      consoleLog.warning("Warning console log");

      // Danger console log
      consoleLog.danger("Danger console log");
    </script>
  </body>
</html>