<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Footer</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Footer</h1>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Footer</h1>
        <p>Styles and classes for the footer.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <div class="dialog warning-dialog width-6 width-xl-12">
        <p>The following features require the JavaScript library.</p>
      </div>

      <h2>Fixed Footer</h2>
      <p>Fix a footer to the bottom of the page. This will always be visible at the bottom of the screen.</p>
      <p><code>fixed-footer</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;footer class="fixed-footer"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Footer content here&lt;/p&gt;</span><br>
        <span>&lt;/footer&gt;</span>
      </div>

      <br>

      <h2>Sticky Footer</h2>
      <p>Stick a footer to the bottom of the page. This will scroll with the content when it overflows.</p>
      <p><code>sticky-footer</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;footer class="sticky-footer"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Footer content here&lt;/p&gt;</span><br>
        <span>&lt;/footer&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>