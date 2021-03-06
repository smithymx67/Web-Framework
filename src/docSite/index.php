<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Home</title>
  <?php require_once "includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Home</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Web Framework</h1>
        <p>This framework is to aid in the creation of web based projects.</p>
      </div>

      <h2>Introduction</h2>
      <p class="width-6 width-xl-12">Welcome to the web framework documentation site, here you can find information about
        features that the framework provides.</p>
      <p class="width-6 width-xl-12">This framework consists of two files, <code>bluePallet.min.css</code> and <code>yellowPallet.min.js</code>,
        although you can choose to only use one of the files, some features in this framework require both files to work
        correctly. Features that require both files are clearly identified in the documentation pages.</p>

      <ul>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/styles/"; ?>" title="Styles">Styles</a></li>
        <li><a href="<?php echo ROOT_DOCSITE_URL . "/scripts/"; ?>" title="Scripts">Scripts</a></li>
      </ul>

      <br>

      <h2>How To Use</h2>
      <p class="width-6 width-xl-12">All releases are available on GitHub, to use this framework first download the version
        you require from <a href="https://github.com/smithymx67/Web-Framework/releases" title="Framework Releases" target="_blank">here</a>.</p>
      <p class="width-6 width-xl-12">Now you have the files, place them into to your project folder and create links to them.
        See the example below.</p>

      <h3>Stylesheet Library <code>bluePallet.min.css</code></h3>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;link rel="stylesheet" href="bluePallet.min.css"&gt;</span>
      </div>

      <br>

      <h3>JavaScript Library <code>yellowPallet.min.js</code></h3>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;script src="yellowPallet.min.js"&gt;&lt;/script&gt;</span>
      </div>

      <br>

      <h2>Sourcemaps</h2>
      <p class="width-6 width-xl-12">Sourcemaps for both the CSS and JavaScript libraries are available to download if needed for debugging.</p>
      <p class="width-6 width-xl-12">To use them simply download the sourcemap file that corresponds to your version and drop them into the
        same directory as the main library files.</p>

      <br>

      <h2>License</h2>
      <p class="width-6 width-xl-12">MIT License</p>
      <p class="width-6 width-xl-12">Copyright (c) 2017 Sam Smith</p>

      <p class="width-6 width-xl-12">Permission is hereby granted, free of charge, to any person obtaining a copy
        of this software and associated documentation files (the "Software"), to deal
        in the Software without restriction, including without limitation the rights
        to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
        copies of the Software, and to permit persons to whom the Software is
        furnished to do so, subject to the following conditions:</p>

      <p class="width-6 width-xl-12">The above copyright notice and this permission notice shall be included in all
        copies or substantial portions of the Software.</p>

      <p class="width-6 width-xl-12">THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
        IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
        FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
        AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
        LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
        OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
        SOFTWARE.</p>
    </div>
  </div>

  <?php require_once "includes/footer.php"; ?>
</body>
</html>