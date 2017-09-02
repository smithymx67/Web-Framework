<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Features</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Features</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Features</h1>
        <p>Features that this framework provides.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <ul>
        <li><a href="heroHeader.php" title="Hero Header">Hero Header</a></li>
        <li><a href="headerText.php" title="Header Text">Header Text</a></li>
        <li><a href="badgesLabels.php" title="Badges and Labels">Badges and Labels</a></li>
        <li><a href="panels.php" title="Panels">Panels</a></li>
        <li><a href="codeBlock.php" title="Code Block">Code Block</a></li>
        <li><a href="spinners.php" title="Spinners">Spinners</a></li>
        <li><a href="infoDialogs.php" title="Info Dialogs">Info Dialogs</a></li>
      </ul>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>