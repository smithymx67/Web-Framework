<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Features - Header Text</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Features - Header Text</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Header Text</h1>
        <p>The header text feature provides a clear defined header for content.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles/features"; ?>" title="Features">Go Back</a>
    </div>
    
    <div class="col-12">
      <p>Header text can be placed in any container, it will strech to 100% width.</p>
      <p>To create a header text feature apply the <code>header-text</code> class to a div tag</p>
      <div class="code-block">
        <span>&lt;div class="header-text"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;h1&gt;Header Text&lt;/h1&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Sub text&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>

    <div class="col-4 col-m-12">
      <div class="header-text">
        <h1>Header Text</h1>
        <p>Sub text</p>
      </div>
      
      <p>Content of the column goes here</p>
    </div>
    
    <div class="col-4 col-m-12">
      <div class="header-text">
        <h1>Header Text</h1>
        <p>Sub text</p>
      </div>
      
      <p>Content of the column goes here</p>
    </div>
    
    <div class="col-4 col-m-12">
      <div class="header-text">
        <h1>Header Text</h1>
        <p>Sub text</p>
      </div>
      
      <p>Content of the column goes here</p>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>