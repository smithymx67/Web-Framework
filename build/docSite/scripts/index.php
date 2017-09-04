<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Scripts | Home</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Scripts - Home</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Web Framework - Scripts</h1>
        <p>Scripts that are in this framework.</p>
      </div>
    </div>
    
    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL ?>" title="Home">Go Back</a>
    </div>
    
    <div class="col-12">
      <ul>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/scripts/consoleLog"; ?>" title="Console Log">Console Log</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/scripts/elementSelector"; ?>" title="Element Selector">Element Selector</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/scripts/dateTime"; ?>" title="Date Time">Date Time</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/scripts/slideshow"; ?>" title="Slideshow">Slideshow</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/scripts/gallery"; ?>" title="Gallery">Gallery</a></li>
      </ul>
    </div>
  </div>
  
  <?php require_once "../includes/footer.php"; ?>
</body>
</html>