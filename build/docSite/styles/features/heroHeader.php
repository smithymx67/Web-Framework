<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Style | Features | Hero Header</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Style - Features - Hero Header</h1>
      </div>
    </div>
  </header>
  
  <div class="hero">
    <h1>Hero Heading</h1>
    <p>Hero sub text</p>
  </div>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Hero Header</h1>
        <p>The hero header is a feature with large padding top and bottom to make it stand out.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles/features"; ?>" title="Features">Go Back</a>
    </div>

    <div class="col-12">
      <p>Place hero feature outside of container for full screen, or use it inside columns shown below.</p>
      <p>To create a hero header apply the <code>hero</code> class to a div tag</p>
      <div class="code-block">
        <span>&lt;div class="hero"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;h1&gt;Hero Heading&lt;/h1&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Hero sub text&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
    
    <div class="col-4 col-m-12">
      <div class="hero">
        <h1>Hero 1</h1>
        <p>Sub text</p>
      </div>
      <p>This column has a hero header.</p>
    </div>
    
    <div class="col-4 col-m-12">
      <div class="hero">
        <h1>Hero 1</h1>
        <p>Sub text</p>
      </div>
      <p>This column also has a hero header.</p>
    </div>
    
    <div class="col-4 col-m-12">
      <div class="hero">
        <h1>Hero 1</h1>
        <p>Sub text</p>
      </div>
      <p>Finally, this column has a hero header too.</p>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>