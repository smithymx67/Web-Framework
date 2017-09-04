<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Text</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Text</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Text</h1>
        <p>Styles and classes for text.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>
    
    <div class="col-12">
      <h2>Bold Text</h2>
      <p>Added v1.0.0</p>
      <p>To make text bold add the following class <code>bold-text</code></p>
      <p class="bold-text">This text is bold</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;p class="bold-text"&gt;This text is bold&lt;/p&gt;</span>
      </div>
      <br>
      
      <h2>Italic Text</h2>
      <p>Added v1.0.0</p>
      <p>To make text italic add the following class <code>italic-text</code></p>
      <p class="italic-text">This text is italic</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;p class="italic-text"&gt;This text is italic&lt;/p&gt;</span>
      </div>
      <br>
      
      <h2>Underlined Text</h2>
      <p>Added v1.0.0</p>
      <p>To underline text add the following class <code>underlined-text</code></p>
      <p class="underlined-text">This text is underlined</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;p class="underlined-text"&gt;This text is underlined&lt;/p&gt;</span>
      </div>
      <br>
      
      <h2>Overlined Text</h2>
      <p>Added v1.0.0</p>
      <p>To overline text add the following class <code>overlined-text</code></p>
      <p class="overlined-text">This text is overlined</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;p class="overlined-text"&gt;This text is overlined&lt;/p&gt;</span>
      </div>
      <br>
      
      <h2>Striked Text</h2>
      <p>Added v1.0.0</p>
      <p>To strike through text add the following class <code>striked-text</code></p>
      <p class="striked-text">This text is striked</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;p class="striked-text"&gt;This text is striked&lt;/p&gt;</span>
      </div>
    </div>
    
    <div class="col-12"><h2>Alignment</h2></div>
    <div class="col-4 col-m-12">
      <h3>Align Text - Left</h3>
      <p>Added v1.0.0</p>
      <p>To align text to the left add the following class <code>left-align</code></p>
      <p class="left-align">This text is aligned left</p>
      <div class="code-block">
        <span>&lt;p class="left-align"&gt;</span><br>
        <span>&nbsp;&nbsp;This text is aligned left</span><br>
        <span>&lt;/p&gt;</span>
      </div>
    </div>

    <div class="col-4 col-m-12">
      <h3>Align Text - Center</h3>
      <p>Added v1.0.0</p>
      <p>To align text in the center add the following class <code>center-align</code></p>
      <p class="center-align">This text is aligned center</p>
      <div class="code-block">
        <span>&lt;p class="center-align"&gt;</span><br>
        <span>&nbsp;&nbsp;This text is aligned center</span><br>
        <span>&lt;/p&gt;</span>
      </div>
    </div>

    <div class="col-4 col-m-12">
      <h3>Align Text - Right</h3>
      <p>Added v1.0.0</p>
      <p>To align text to the right add the following class <code>right-align</code></p>
      <p class="right-align">This text is aligned right</p>
      <div class="code-block">
        <span>&lt;p class="right-align"&gt;</span><br>
        <span>&nbsp;&nbsp;This text is aligned right</span><br>
        <span>&lt;/p&gt;</span>
      </div>
    </div>
    <div class="col-12">
      <h3>Responsive Alignment</h3>
      <p>If needed you can specify how text is aligned on different screen sizes by applying the following classes.</p>
    </div>

    <div class="col-2-5 col-m-12">
      <h4>X-Large Screens (1440px)</h4>
      <p>Added v1.0.0</p>
      <ul>
        <li><code>left-align-xl</code></li>
        <li><code>center-align-xl</code></li>
        <li><code>right-align-xl</code></li>
      </ul>
    </div>

    <div class="col-2-5 col-m-12">
      <h4>Large Screens (1024px)</h4>
      <p>Added v1.0.0</p>
      <ul>
        <li><code>left-align-l</code></li>
        <li><code>center-align-l</code></li>
        <li><code>right-align-l</code></li>
      </ul>
    </div>

    <div class="col-2-5 col-m-12">
      <h4>Medium Screens (768px)</h4>
      <p>Added v1.0.0</p>
      <ul>
        <li><code>left-align-m</code></li>
        <li><code>center-align-m</code></li>
        <li><code>right-align-m</code></li>
      </ul>
    </div>

    <div class="col-2-5 col-m-12">
      <h4>Small Screens (425px)</h4>
      <p>Added v1.0.0</p>
      <ul>
        <li><code>left-align-s</code></li>
        <li><code>center-align-s</code></li>
        <li><code>right-align-s</code></li>
      </ul>
    </div>

    <div class="col-2-5 col-m-12">
      <h4>X-Small Screens (375px)</h4>
      <p>Added v1.0.0</p>
      <ul>
        <li><code>left-align-xs</code></li>
        <li><code>center-align-xs</code></li>
        <li><code>right-align-xs</code></li>
      </ul>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>