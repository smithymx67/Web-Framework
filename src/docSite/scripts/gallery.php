<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Scripts | Gallery</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Scripts - Gallery</h1>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Gallery</h1>
        <p>Gallery features in this framework.</p>
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
      <h2>Gallery of Images</h2>
      <p>Added v1.1.1</p>
      <p>A gallery is a set of images, when an image is clicked it will be enlarged and displayed in an overlay on the page.</p>

      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;div class="gallery" id="gallery-1"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var args = {</span><br>
        <span>&nbsp;&nbsp;// Optional</span><br>
        <span>&nbsp;&nbsp;imgContainerClasses: "col-3 col-m-6",</span><br>
        <span>&nbsp;&nbsp;imgClasses: "bordered-img",</span><br>
        <span>&nbsp;&nbsp;spinner: "spinner-1",</span><br>
        <br>
        <span>&nbsp;&nbsp;// Required</span><br>
        <span>&nbsp;&nbsp;galleryID: "#gallery-1",</span><br>
        <span>&nbsp;&nbsp;images: [</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_2.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_3.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_6.jpg",</span><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_7.jpg"</span><br>
        <span>&nbsp;&nbsp;]</span><br>
        <span>};</span><br>
        <br>
        <span>createGallery(args);</span>
      </div>
    </div>

    <div class="col-12">
      <h2>Gallery of Images</h2>
      <p>Added v1.1.0</p>
      <p>Removed v1.1.1</p>
      <p>A gallery is a set of images, when an image is clicked it will be enlarged and displayed in an overlay on the page.</p>

      <h3>HTML</h3>
      <div class="code-block">
        <span>&lt;div class="gallery" id="gallery-1"&gt;&lt;/div&gt;</span>
      </div>

      <h3>JavaScript</h3>
      <div class="code-block">
        <span>var galleryImages = [</span><br>
        <span>&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_2.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_3.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_6.jpg",</span><br>
        <span>&nbsp;&nbsp;"https://smithymx67.co.uk/Framework/docSite/images/flowers_7.jpg"</span><br>
        <span>];</span><br>
        <br>
        <span>createGallery(galleryImages, "#gallery-1", "col-3 col-m-6", "bordered-img");</span>
      </div>
    </div>

    <div class="gallery" id="gallery-1"></div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
  <script>
    var args = {
      // Optional
      imgContainerClasses: "col-3 col-m-6",
      imgClasses: "bordered-img",
      spinner: "spinner-1",

      // Required
      galleryID: "#gallery-1",
      images: [
        "https://smithymx67.co.uk/Framework/docSite/images/flowers_2.jpg",
        "https://smithymx67.co.uk/Framework/docSite/images/flowers_3.jpg",
        "https://smithymx67.co.uk/Framework/docSite/images/flowers_6.jpg",
        "https://smithymx67.co.uk/Framework/docSite/images/flowers_7.jpg"
      ]
    };

    createGallery(args);
  </script>
</body>
</html>