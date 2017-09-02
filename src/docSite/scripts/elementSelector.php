<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Scripts | Element Selector</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Scripts - Element Selector</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text width-6 width-l-12">
        <h1>Element Selector</h1>
        <p>Select elements from the DOM.</p>
      </div>
    </div>
    
    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/scripts/"; ?>" title="Scripts">Go Back</a>
    </div>
    
    <div class="col-12">
      <h2>Select by ID</h2>
      <p>Select an element by its ID name.</p>
      <div class="code-block width-6 width-l-12">
        <span>elem("#image1");</span>
      </div>
      
      <br>
      
      <h2>Select by class</h2>
      <p>Select an element by its class name.</p>
      <div class="code-block width-6 width-l-12">
        <span>elem(".col-12");</span>
      </div>
      
      <br>
      
      <h2>Select by tag name</h2>
      <p>Select an element by its HTML tag name.</p>
      <div class="code-block width-6 width-l-12">
        <span>elem("div");</span>
      </div>
    </div>
  </div>
  
  <?php require_once "../includes/footer.php"; ?>
</body>
</html>