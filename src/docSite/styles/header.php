<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Header</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Header</h1>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Header</h1>
        <p>Styles and classes for the header.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <div class="dialog warning-dialog width-6 width-xl-12">
        <p>The following features require the JavaScript library.</p>
      </div>

      <h2>Fixed Header</h2>
      <p>Added v1.0.0</p>
      <p>Fix a header to the top of the page. This will always be visible at the top of the screen.</p>
      <p><code>fixed-header</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;header class="fixed-header"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Header content here&lt;/p&gt;</span><br>
        <span>&lt;/header&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>