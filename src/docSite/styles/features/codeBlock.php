<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Features - Code Block</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Features - Code Block</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Code Block</h1>
        <p>The code block is used as a container for displaying code.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles/features"; ?>" title="Features">Go Back</a>
    </div>
    
    <div class="col-12">
      <h2>The Code</h2>
      <p>To create a code block add the class <code>code-block</code> to a div element</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="code-block"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;span&gt;var name = "Sam";&lt;/span&gt;&lt;br&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;span&gt;console.log("Hello " + name);&lt;/span&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h2>The Output</h2>
      <div class="code-block width-6 width-xl-12">
        <span>var name = "Sam";</span><br>
        <span>console.log("Hello " + name);</span>
      </div>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>