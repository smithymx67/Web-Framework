<?php require_once "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Features | Badges and Labels</title>
  <?php require_once "../../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Features - Badges and Labels</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Badges and Labels</h1>
        <p>Badges and labels can be used to indicate and organise content.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles/features"; ?>" title="Features">Go Back</a>
    </div>
    
    <div class="col-12">
      <h2>Badges</h2>
      <p class="width-6 width-xl-12">To create a badge apply the <code>badge</code> class to a span tag</p>
      <a href="#">Updates <span class="badge">5</span></a><br>
      <a href="#">Comments <span class="badge">74</span></a><br>
      <a href="#">Mail <span class="badge">138</span></a>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;a href="#"&gt;Updates &lt;span class="badge"&gt;5&lt;/span&gt;&lt;/a&gt;&lt;br&gt;</span><br>
        <span>&lt;a href="#"&gt;Comments &lt;span class="badge"&gt;74&lt;/span&gt;&lt;/a&gt;&lt;br&gt;</span><br>
        <span>&lt;a href="#"&gt;Mail &lt;span class="badge"&gt;138&lt;/span&gt;&lt;/a&gt;&lt;br&gt;</span>
      </div>
    </div>
    
    <div class="col-12">
      <h2>Labels</h2>
      <p class="width-6 width-xl-12">To create a label apply the <code>label</code> class to a span tag, the label can also be styled depending on its
        information type, examples can be seen below.</p>
      <span class="label">Default Label</span>
      <span class="label info-label">Information Label</span>
      <span class="label success-label">Success Label</span>
      <span class="label warning-label">Warning Label</span>
      <span class="label danger-label">Danger Label</span>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;span class="label"&gt;Default Label&lt;/span&gt;</span><br>
        <span>&lt;span class="label info-label"&gt;Information Label&lt;/span&gt;</span><br>
        <span>&lt;span class="label success-label"&gt;Success Label&lt;/span&gt;</span><br>
        <span>&lt;span class="label warning-label"&gt;Warning Label&lt;/span&gt;</span><br>
        <span>&lt;span class="label danger-label"&gt;Danger Label&lt;/span&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../../includes/footer.php"; ?>
</body>
</html>