<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Lists</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Lists</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Lists</h1>
        <p>List styles and classes.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>
    
    <div class="col-12">
      <h2>List Types</h2>
    </div>

    <div class="col-4 col-l-12">
      <h3>Ordered List - Numbers</h3>
      <p>To show numbers on an ordered list apply the class <code>numbered-list</code> to an <code>ol</code> tag.</p>
      <ol class="numbered-list">
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
        <li>List Item 4</li>
      </ol>
      <div class="code-block">
        <span>&lt;ol class="numbered-list"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 1&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 2&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 3&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 4&lt;/li&gt;</span><br>
        <span>&lt;/ol&gt;</span>
      </div>
    </div>
    
    <div class="col-4 col-l-12">
      <h3>Ordered List - Letters</h3>
      <p>To show letters on an ordered list apply the class <code>lettered-list</code> to an <code>ol</code> tag.</p>
      <ol class="lettered-list">
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
        <li>List Item 4</li>
      </ol>
      <div class="code-block">
        <span>&lt;ol class="lettered-list"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 1&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 2&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 3&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 4&lt;/li&gt;</span><br>
        <span>&lt;/ol&gt;</span>
      </div>
    </div>
    
    <div class="col-4 col-l-12">
      <h3>Ordered List - Roman Numerals</h3>
      <p>To show roman numerals on an ordered list apply the class <code>numeraled-list</code> to an <code>ol</code> tag.</p>
      <ol class="numeraled-list">
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
        <li>List Item 4</li>
      </ol>
      <div class="code-block">
        <span>&lt;ol class="numeraled-list"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 1&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 2&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 3&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 4&lt;/li&gt;</span><br>
        <span>&lt;/ol&gt;</span>
      </div>
    </div>
    
    <div class="col-4 col-l-12">
      <h3>Unordered List</h3>
      <ul>
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
        <li>List Item 4</li>
      </ul>
      <div class="code-block">
        <span>&lt;ul&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 1&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 2&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 3&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 4&lt;/li&gt;</span><br>
        <span>&lt;/ul&gt;</span>
      </div>
    </div>
    
    <div class="col-4 col-l-12">
      <h3>Descriptive List</h3>
      <dl>
        <dt>List Item 1</dt>
        <dd>Description of item 1</dd>
        <dt>List Item 2</dt>
        <dd>Description of item 2</dd>
      </dl>
      <div class="code-block">
        <span>&lt;dl&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;dt&gt;List Item 1&lt;/dt&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;dd&gt;List Item 2&lt;/dd&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;dt&gt;List Item 3&lt;/dt&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;dd&gt;List Item 4&lt;/dd&gt;</span><br>
        <span>&lt;/dl&gt;</span>
      </div>
    </div>
    
    <hr>
    
    <div class="col-12">
      <h3>List Group</h3>
      <ul class="group-list">
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
        <li>List Item 4</li>
      </ul>
      <div class="code-block">
        <span>&lt;ul class="group-list"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 1&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 2&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 3&lt;/li&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;li&gt;List Item 4&lt;/li&gt;</span><br>
        <span>&lt;/ul&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>