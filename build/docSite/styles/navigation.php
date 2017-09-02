<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Navigation</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Navigation</h1>
      </div>
    </div>
  </header>

  <nav class="top-nav">
    <div class="container">
      <div class="col-12">
        <ul>
          <li><a href="#" title="Home">Home</a></li>
          <li><a href="#" title="About">About</a></li>
          <li><a href="#" title="Projects">Projects</a></li>
          <li><a href="#" title="Contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Navigation</h1>
        <p>Styles and classes for navigation.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <p>The navigation can contain anything you want but it is recommended that you wrap the nav content inside a div with the <code>container</code> class.</p>
      <p>The example below will produce the nav bar shown at the top of the page, to make it span the whole page place it outside of a <code>container</code>.</p>
      <div class="code-block">
        <span>&lt;nav class="top-nav"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="container"&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div class="col-12"&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#" title="Home"&gt;Home&lt;/a&gt;&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#" title="About"&gt;About&lt;/a&gt;&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#" title="Projects"&gt;Projects&lt;/a&gt;&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li&gt;&lt;a href="#" title="Contact"&gt;Contact&lt;/a&gt;&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul&gt;</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;/div&gt;</span><br>
        <span>&lt;/nav&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>