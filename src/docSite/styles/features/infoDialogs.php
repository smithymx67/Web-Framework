<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Infomation Dialogs</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Infomation Dialogs</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Information Dialogs</h1>
        <p>Information dialogs can be used to information based on its context.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles/features"; ?>" title="Features">Go Back</a>
    </div>
    
    <div class="col-12">
      <h2>Default Dialog</h2>
      <p class="width-6 width-xl-12">To create a default dialog add the class <code>dialog</code> to a div tag</p>
      <div class="dialog width-6 width-xl-12">
        <p>This is a default dialog</p>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="dialog"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This is a default dialog&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>

    <div class="col-12">
      <h2>Danger Dialog</h2>
      <p class="width-6 width-xl-12">To create a default dialog add the class <code>danger-dialog</code> along side the <code>dialog</code> to a div tag</p>
      <div class="dialog danger-dialog width-6 width-xl-12">
        <p>This is a danger dialog</p>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="dialog danger-dialog"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This is a danger dialog&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
    
    <div class="col-12">
      <h2>Warning Dialog</h2>
      <p class="width-6 width-xl-12">To create a default dialog add the class <code>warning-dialog</code> along side the <code>dialog</code> to a div tag</p>
      <div class="dialog warning-dialog width-6 width-xl-12">
        <p>This is a warning dialog</p>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="dialog warning-dialog"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This is a warning dialog&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
    
    <div class="col-12">
      <h2>Success Dialog</h2>
      <p class="width-6 width-xl-12">To create a default dialog add the class <code>success-dialog</code> along side the <code>dialog</code> to a div tag</p>
      <div class="dialog success-dialog width-6 width-xl-12">
        <p>This is a success dialog</p>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="dialog success-dialog"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This is a success dialog&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
        
    <div class="col-12">
      <h2>Information Dialog</h2>
      <p class="width-6 width-xl-12">To create a default dialog add the class <code>info-dialog</code> along side the <code>dialog</code> to a div tag</p>
      <div class="dialog info-dialog width-6 width-xl-12">
        <p>This is a information dialog</p>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="dialog info-dialog"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This is a information dialog&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>