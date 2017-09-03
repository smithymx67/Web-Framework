<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Position</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Position</h1>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Position</h1>
        <p>Position content where you need it.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12 position" style="height: 300px;">
      <div class="position-top-left">Top Left</div>
      <div class="position-top-center">Top Center</div>
      <div class="position-top-right">Top Right</div>
      <div class="position-left">Left</div>
      <div class="position-center">Center</div>
      <div class="position-right">Right</div>
      <div class="position-bottom-left">Bottom Left</div>
      <div class="position-bottom-center">Bottom Center</div>
      <div class="position-bottom-right">Bottom Right</div>
    </div>

    <div class="col-12">
      <div class="code-block">
        <span>&lt;!-- The height must be defined to fit the content --&gt;</span><br>
        <span>&lt;div class="col-12 position"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-top-left"&gt;Top Left&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-top-center"&gt;Top Center&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-top-right"&gt;Top Right&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-left"&gt;Left&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-center"&gt;Center&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-right"&gt;Right&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-bottom-left"&gt;Bottom Left&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-bottom-center"&gt;Bottom Center&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div class="position-bottom-right"&gt;Bottom Right&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>

      <h2>Top Left</h2>
      <p>Added v1.0.0</p>
      <p>Display content in the top left corner of the container.</p>
      <p><code>position-top-left</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-top-left"&gt;Top Left&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Top Center</h2>
      <p>Added v1.0.0</p>
      <p>Display content in the top center of the container.</p>
      <p><code>position-top-center</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-top-center"&gt;Top Center&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Top Right</h2>
      <p>Added v1.0.0</p>
      <p>Display content in the top right corner of the container.</p>
      <p><code>position-top-right</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-top-right"&gt;Top Right&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Left</h2>
      <p>Added v1.0.0</p>
      <p>Display content on the left of the container.</p>
      <p><code>position-left</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-left"&gt;Left&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Center</h2>
      <p>Added v1.0.0</p>
      <p>Display content in the center of the container.</p>
      <p><code>position-center</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-center"&gt;Center&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Right</h2>
      <p>Added v1.0.0</p>
      <p>Display content on the right of the container.</p>
      <p><code>position-right</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-right"&gt;Right&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Bottom Left</h2>
      <p>Added v1.0.0</p>
      <p>Display content in the bottom left corner of the container.</p>
      <p><code>position-bottom-left</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-bottom-left"&gt;Bottom Left&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Bottom Center</h2>
      <p>Added v1.0.0</p>
      <p>Display content in the bottom center of the container.</p>
      <p><code>position-bottom-center</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-bottom-center"&gt;Bottom Center&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Bottom Right</h2>
      <p>Added v1.0.0</p>
      <p>Display content in the bottom right corner of the container.</p>
      <p><code>position-bottom-right</code></p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-bottom-right"&gt;Bottom Right&lt;/div&gt;</span>
      </div>

      <br>
      <h2>Clear Position</h2>
      <p>Added v1.0.1</p>
      <p>Clear the position making adding it back to the content flow.</p>
      <ul>
        <li><code>clear-position</code></li>
        <li><code>clear-position-xl</code></li>
        <li><code>clear-position-l</code></li>
        <li><code>clear-position-m</code></li>
        <li><code>clear-position-s</code></li>
        <li><code>clear-position-xs</code></li>
      </ul>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="position-bottom-right clear-position-m"&gt;</span><br>
        <span>Bottom Right until medium screen size is hit</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>