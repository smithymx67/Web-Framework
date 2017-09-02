<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Features | Panels</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Features - Panels</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Panels</h1>
        <p>Panels provides a clean visual container for content.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles/features"; ?>" title="Features">Go Back</a>
    </div>

    <div class="col-12">
      <h2>Default Panel</h2>
      <p class="width-6 width-xl-12">To create a default panel apply the <code>panel</code> class to a div, then create two more div elements inside
        the panel div. Give one the class <code>panel-header</code> and the other <code>panel-content</code></p>
      <div class="panel width-6 width-xl-12">
        <div class="panel-header">Default Panel Header</div>
        <div class="panel-content">This is the panel content.</div>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="panel"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-header"&gt;Default Panel Header&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-content"&gt;This is the panel content.&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h2>Information Panel</h2>
      <p class="width-6 width-xl-12">To create a information panel add the <code>info-panel</code> class to the <code>panel</code> div</p>
      <div class="panel info-panel width-6 width-xl-12">
        <div class="panel-header">Information Panel Header</div>
        <div class="panel-content">This is the panel content.</div>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="panel info-panel"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-header"&gt;Information Panel Header&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-content"&gt;This is the panel content.&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h2>Success Panel</h2>
      <p class="width-6 width-xl-12">To create a success panel add the <code>success-panel</code> class to the <code>panel</code> div</p>
      <div class="panel success-panel width-6 width-xl-12">
        <div class="panel-header">Success Panel Header</div>
        <div class="panel-content">This is the panel content.</div>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="panel success-panel"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-header"&gt;Success Panel Header&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-content"&gt;This is the panel content.&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h2>Warning Panel</h2>
      <p class="width-6 width-xl-12">To create a warning panel add the <code>warning-panel</code> class to the <code>panel</code> div</p>
      <div class="panel warning-panel width-6 width-xl-12">
        <div class="panel-header">Warning Panel Header</div>
        <div class="panel-content">This is the panel content.</div>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="panel warning-panel"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-header"&gt;Warning Panel Header&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-content"&gt;This is the panel content.&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h2>Danger Panel</h2>
      <p class="width-6 width-xl-12">To create a danger panel add the <code>danger-panel</code> class to the <code>panel</code> div</p>
      <div class="panel danger-panel width-6 width-xl-12">
        <div class="panel-header">Danger Panel Header</div>
        <div class="panel-content">This is the panel content.</div>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="panel danger-panel"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-header"&gt;Danger Panel Header&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="panel-content"&gt;This is the panel content.&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>