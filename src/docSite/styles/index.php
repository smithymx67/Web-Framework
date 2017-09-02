<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Home</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Home</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Web Framework - Styles</h1>
        <p>This framework is to aid in the creation of web based projects.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL; ?>" title="Home">Go Back</a>
    </div>
      
    <div class="col-12">
      <ul>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/layout"; ?>" title="Layout">Layout</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/text"; ?>" title="Text">Text</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/elements"; ?>" title="Elements">Elements</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/features/"; ?>" title="Features">Features</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/buttons"; ?>" title="Buttons">Buttons</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/lists"; ?>" title="Lists">Lists</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/forms"; ?>" title="Forms">Forms</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/images"; ?>" title="Images">Images</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/position"; ?>" title="Position">Position</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/footer"; ?>" title="Footer">Footer</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/navigation"; ?>" title="Navigation">Navigation</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/header"; ?>" title="Header">Header</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/darkTheme"; ?>" title="Dark Theme">Dark Theme</a></li>
      </ul>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>