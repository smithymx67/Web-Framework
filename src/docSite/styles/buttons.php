<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Buttons</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Buttons</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Buttons</h1>
        <p>Button styles can classes</p>
      </div>
    </div>
    
    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <h2>Information Buttons</h2>
      <p>Added v1.0.0</p>
      <p class="width-6 width-xl-12">To style a button like the ones below add the class <code>btn</code> to a button element, you can also style buttons
        depending on its information type. Just apply one of the following classes along side the <code>btn</code> class,
        <code>info-btn</code>, <code>success-btn</code>, <code>warning-btn</code> or <code>danger-btn</code></p>

      <button class="btn">Default</button>
      <button class="btn info-btn">Information</button>
      <button class="btn success-btn">Success</button>
      <button class="btn warning-btn">Warning</button>
      <button class="btn danger-btn">Danger</button>
      
      <div class="code-block width-6 width-xl-12">
        <span>&lt;button class="btn"&gt;Default&lt;/button&gt;</span><br>
        <span>&lt;button class="btn info-btn"&gt;Information&lt;/button&gt;</span><br>
        <span>&lt;button class="btn success-btn"&gt;Success&lt;/button&gt;</span><br>
        <span>&lt;button class="btn warning-btn"&gt;Warning&lt;/button&gt;</span><br>
        <span>&lt;button class="btn danger-btn"&gt;Danger&lt;/button&gt;</span>
      </div>
    </div>
    
    <div class="col-12">
      <h2>Button Sizes</h2>
      <p>Added v1.0.0</p>
      <p class="width-6 width-xl-12">There are also classes that change the size of the button, simplily apply one of the following classes along side
        the <code>btn</code> class, <code>s-btn</code>, <code>m-btn</code>, <code>l-btn</code>, <code>xl-btn</code></p>

      <button class="btn s-btn">Small</button>
      <button class="btn m-btn">Medium</button>
      <button class="btn l-btn">Large</button>
      <button class="btn xl-btn">X-Large</button>
      
      <div class="code-block width-6 width-xl-12">
        <span>&lt;button class="btn small-btn"&gt;Small&lt;/button&gt;</span><br>
        <span>&lt;button class="btn medium-btn"&gt;Medium&lt;/button&gt;</span><br>
        <span>&lt;button class="btn large-btn"&gt;Large&lt;/button&gt;</span><br>
        <span>&lt;button class="btn xlarge-btn"&gt;X-Large&lt;/button&gt;</span>
      </div>
    </div>
    
    <div class="col-12">
      <h2>Button Group - Horizontal</h2>
      <p>Added v1.0.0</p>
      <p class="width-6 width-xl-12">Buttons can be grouped together horizontally by applying the class <code>btn-group-horizontal</code> to a div
        wrapped around some buttons</p>

      <div class="btn-group-horizontal">
        <button class="btn">Button 1</button>
        <button class="btn">Button 2</button>
        <button class="btn">Button 3</button>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="btn-group-horizontal"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;button class="btn"&gt;Button 1&lt;/button&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;button class="btn"&gt;Button 2&lt;/button&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;button class="btn"&gt;Button 3&lt;/button&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
    
    <div class="col-12">
      <h2>Button Group - Vertical</h2>
      <p>Added v1.0.0</p>
      <p class="width-6 width-xl-12">Buttons can be grouped together vertically by applying the class <code>btn-group-vertical</code> to a div
        wrapped around some buttons</p>

      <div class="btn-group-vertical">
        <button class="btn">Button 1</button>
        <button class="btn">Button 2</button>
        <button class="btn">Button 3</button>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="btn-group-vertical"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;button class="btn"&gt;Button 1&lt;/button&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;button class="btn"&gt;Button 2&lt;/button&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;button class="btn"&gt;Button 3&lt;/button&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
  </div>
  
  <?php require_once "../includes/footer.php"; ?>
</body>
</html>