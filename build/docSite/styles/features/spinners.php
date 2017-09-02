<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Features | Spinners</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Features - Spinners</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Spinners</h1>
        <p>Spinners to use while content is loading.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles/features"; ?>" title="Features">Go Back</a>
    </div>

    <div class="col-4 col-l-12">
      <h2>Spinner 1</h2>
      <p>To create this spinner add the class <code>spinner</code> to a div, then add the class <code>spinner-1</code> to
        a inner div</p>
      <div class="spinner">
        <div class="spinner-1"></div>
      </div>
    </div>
    
    <div class="col-4 col-l-12">
      <h2>Spinner 2</h2>
      <p>To create this spinner add the class <code>spinner</code> to a div, then add the class <code>spinner-2</code> to
        a inner div</p>
      <div class="spinner">
        <div class="spinner-2"></div>
      </div>
    </div>
    
    <div class="col-4 col-l-12">
      <h2>Spinner 3</h2>
      <p>To create this spinner add the class <code>spinner</code> to a div, then add the class <code>spinner-3</code> to
        a inner div</p>
      <div class="spinner">
        <div class="spinner-3"></div>
      </div>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>