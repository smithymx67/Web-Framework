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
        The slideshow will be paused on the current slide whenever a user hovers over it and will resume when un-hovered. Add the class
        <code>slideshow</code> to the slideshow div.
      </p>
    </div>

    <div class="col-12">
      <h2>Basic Slideshow</h2>
      <p>A basic slideshow that will loop through the provided images.</p>
      <p>Added v1.0.0</p>
      <p>Removed v1.2.0</p>
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

      <br>

      <p>Added v1.2.0</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;elemID: "#example-slideshow",</span><br>
        <span>&nbsp;&nbsp;interval: 2000,</span><br>
        <span>&nbsp;&nbsp;style: "snap",</span><br>
        <span>&nbsp;&nbsp;imageArray: [</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>&nbsp;&nbsp;]</span><br>
        <span>};</span><br>
        <br>
        <span>slideshow.create(args);</span>
      </div>
      <div class="slideshow" id="example1-slideshow"></div>
      <br><br><br>
    </div>

    <div class="col-12">
      <h2>Fade In / Out Slideshow</h2>
      <p>Same as the basic slideshow above but this time with a slide fade transition.</p>
      <p>Added v1.0.0</p>
      <p>Removed v1.2.0</p>
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

      <br>

      <p>Added v1.2.0</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;elemID: "#example-slideshow",</span><br>
        <span>&nbsp;&nbsp;interval: 2000,</span><br>
        <span>&nbsp;&nbsp;style: "fade",</span><br>
        <span>&nbsp;&nbsp;imageArray: [</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>&nbsp;&nbsp;]</span><br>
        <span>};</span><br>
        <br>
        <span>slideshow.create(args);</span>
      </div>
      <div class="slideshow" id="example2-slideshow"></div>
      <br><br><br>
    </div>

    <div class="col-12">
      <h2>Slideshow With Arrow Controls</h2>
      <p>A slideshow with arrow controls will allow the user to navigate back and forward through the slides.</p>
      <p>Added v1.0.0</p>
      <p>Removed v1.2.0</p>
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

      <br>

      <p>Added v1.2.0</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;elemID: "#example-slideshow",</span><br>
        <span>&nbsp;&nbsp;interval: 2000,</span><br>
        <span>&nbsp;&nbsp;style: "fade",</span><br>
        <span>&nbsp;&nbsp;control: "arrows",</span><br>
        <span>&nbsp;&nbsp;imageArray: [</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>&nbsp;&nbsp;]</span><br>
        <span>};</span><br>
        <br>
        <span>slideshow.create(args);</span>
      </div>
      <div class="slideshow" id="example3-slideshow"></div>
      <br><br><br>
    </div>

    <div class="col-12">
      <h2>Slideshow With Dot Controls</h2>
      <p>A slideshow with dot controls will allow the user to navigate to any slide on demand.</p>
      <p>Added v1.0.0</p>
      <p>Removed v1.2.0</p>
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

      <br>

      <p>Added v1.2.0</p>
      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;!-- The id can be anything, it is used to identify the slideshow --&gt;</span><br>
        <span>&lt;div class="slideshow" id="example-slideshow"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;elemID: "#example-slideshow",</span><br>
        <span>&nbsp;&nbsp;interval: 2000,</span><br>
        <span>&nbsp;&nbsp;style: "fade",</span><br>
        <span>&nbsp;&nbsp;control: "dots",</span><br>
        <span>&nbsp;&nbsp;imageArray: [</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_0.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_1.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_2.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://cwsmith.builders/images/slideshow/slide_3.jpg"</span><br>
        <span>&nbsp;&nbsp;]</span><br>
        <span>};</span><br>
        <br>
        <span>slideshow.create(args);</span>
      </div>
      <div class="slideshow" id="example4-slideshow"></div>
    </div>
  </div>
  
  <?php require_once "../includes/footer.php"; ?>
  <script>
		var args1 = {
		  elemID: "#example1-slideshow",
			interval: 2000,
      style: "snap",
      imageArray: [
        "https://cwsmith.builders/images/slideshow/slide_0.jpg",
        "https://cwsmith.builders/images/slideshow/slide_1.jpg",
        "https://cwsmith.builders/images/slideshow/slide_2.jpg",
        "https://cwsmith.builders/images/slideshow/slide_3.jpg"
      ]
		};

		var args2 = {
      elemID: "#example2-slideshow",
			interval: 2000,
      style: "fade",
      imageArray: [
        "https://cwsmith.builders/images/slideshow/slide_0.jpg",
        "https://cwsmith.builders/images/slideshow/slide_1.jpg",
        "https://cwsmith.builders/images/slideshow/slide_2.jpg",
        "https://cwsmith.builders/images/slideshow/slide_3.jpg"
      ]
		};

		var args3 = {
      elemID: "#example3-slideshow",
			interval: 2000,
      style: "fade",
      control: "arrows",
      imageArray: [
        "https://cwsmith.builders/images/slideshow/slide_0.jpg",
        "https://cwsmith.builders/images/slideshow/slide_1.jpg",
        "https://cwsmith.builders/images/slideshow/slide_2.jpg",
        "https://cwsmith.builders/images/slideshow/slide_3.jpg"
      ]
		};

    var args4 = {
      elemID: "#example4-slideshow",
      interval: 2000,
      style: "fade",
      control: "dots",
      imageArray: [
        "https://cwsmith.builders/images/slideshow/slide_0.jpg",
        "https://cwsmith.builders/images/slideshow/slide_1.jpg",
        "https://cwsmith.builders/images/slideshow/slide_2.jpg",
        "https://cwsmith.builders/images/slideshow/slide_3.jpg"
      ]
    };

		slideshow.create(args1);
		slideshow.create(args2);
		slideshow.create(args3);
    slideshow.create(args4);
  </script>
</body>
</html>