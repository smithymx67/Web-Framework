<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Scripts | Slideshow</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Scripts - Slideshow</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Slideshow</h1>
        <p>A selection of slideshows in this framework.</p>
      </div>
    </div>
    
    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/scripts/"; ?>" title="Scripts">Go Back</a>
    </div>

    <div class="col-12">
      <div class="dialog warning-dialog">
        <p>The following features require both the CSS and JavaScript libraries.</p>
      </div>
    </div>
    
    <div class="col-12">
      <p>
        All slideshows will use a default slide interval of 1.5 seconds if no interval is specified. The slideshow will
        be paused on the current slide whenever a user hovers over it and will resume when un-hovered. Add the class
        <code>slideshow</code> to the slideshow div.
      </p>
      <br>
      <h2>Default Slideshow</h2>
      <p>Added v1.0.0</p>
      <p>A basic slideshow that will loop through the provided images.</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var imageArray = [</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>];</span><br>
        <br>
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;interval: 2000</span><br>
        <span>};</span><br>
        <br>
        <span>createSlideshow("#example-slideshow", imageArray, args);</span>
      </div>
      <div class="slideshow" id="example1-slideshow"></div>
    </div>

    <div class="col-12">
      <h2>Fade In / Out Slideshow</h2>
      <p>Added v1.0.0</p>
      <p>Same as the basic slideshow above but this time with a slide fade transition.</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var imageArray = [</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>];</span><br>
        <br>
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;interval: 2000,</span><br>
        <span>&nbsp;&nbsp;style: "fade"</span><br>
        <span>};</span><br>
        <br>
        <span>createSlideshow("#example-slideshow", imageArray, args);</span>
      </div>
      <div class="slideshow" id="example2-slideshow"></div>
    </div>

    <div class="col-12">
      <h2>Slideshow With Arrow Controls</h2>
      <p>Added v1.0.0</p>
      <p>A slideshow with arrow controls will allow the user to navigate back and forward through the slides.</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var imageArray = [</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>];</span><br>
        <br>
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;interval: 2000,</span><br>
        <span>&nbsp;&nbsp;style: "fade",</span><br>
        <span>&nbsp;&nbsp;control: "arrows"</span><br>
        <span>};</span><br>
        <br>
        <span>createSlideshow("#example-slideshow", imageArray, args);</span>
      </div>
      <div class="slideshow" id="example3-slideshow"></div>
    </div>

    <div class="col-12">
      <h2>Slideshow With Dot Controls</h2>
      <p>Added v1.0.0</p>
      <p>A slideshow with dot controls will allow the user to navigate to any slide on demand.</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var imageArray = [</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>];</span><br>
        <br>
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;interval: 2000,</span><br>
        <span>&nbsp;&nbsp;style: "fade",</span><br>
        <span>&nbsp;&nbsp;control: "dots"</span><br>
        <span>};</span><br>
        <br>
        <span>createSlideshow("#example-slideshow", imageArray, args);</span>
      </div>
      <div class="slideshow" id="example4-slideshow"></div>
    </div>
  </div>
  
  <?php require_once "../includes/footer.php"; ?>
  <script>
		var imageArray = [
			"https://cwsmith.builders/images/slideshow/slide_0.jpg",
      "https://cwsmith.builders/images/slideshow/slide_1.jpg",
      "https://cwsmith.builders/images/slideshow/slide_2.jpg",
      "https://cwsmith.builders/images/slideshow/slide_3.jpg"
    ];

		var args1 = {
			interval: 2000
		};

		var args2 = {
			interval: 2000,
			style: "fade"
		};

		var args3 = {
			interval: 2000,
			style: "fade",
      control: "arrows"
		};

    var args4 = {
      interval: 2000,
      style: "fade",
      control: "dots"
    };

		createSlideshow("#example1-slideshow", imageArray, args1);
		createSlideshow("#example2-slideshow", imageArray, args2);
		createSlideshow("#example3-slideshow", imageArray, args3);
    createSlideshow("#example4-slideshow", imageArray, args4);
  </script>
</body>
</html>