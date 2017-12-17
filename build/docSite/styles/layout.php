<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Layout</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Layout</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Layout</h1>
        <p>This framework has a column based layout, you can have up to 12 columns in one row.
            Each row should add up to 12 and column sizes can be mixed.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <h2>Sections</h2>
      <ul>
        <li><a href="#grid-classes">Grid Classes</a></li>
        <li><a href="#responsive-grid-classes">Responsive Grid Classes</a></li>
        <li><a href="#width-classes">Width Classes</a></li>
        <li><a href="#margin-padding">Margin and Padding Classes</a></li>

        <li><a href="#grid-examples">Grid Examples</a></li>
        <li><a href="#responsive-grid-examples">Responsive Grid Examples</a></li>
      </ul>
    </div>
    
    <div class="col-12">
      <h2 id="grid-classes">Grid Classes</h2>
      <p class="width-6 width-xl-12">The following shows examples of all the different column sizes that are available.</p>

      <h3>col-12</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-12</code> will span 100% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-12"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>

      <h3>col-10</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-10</code> will span 83.33% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-10"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>

      <h3>col-8</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-8</code> will span 66.66% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-8"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>
      
      <h3>col-6</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-6</code> will span 50% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-6"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h3>col-4</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-4</code> will span 33.33% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-4"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h3>col-3</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-3</code> will span 25% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-3"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>

      <h3>col-2-5</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-2-5</code> will span 20% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-2-5"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>
      
      <h3>col-2</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-2</code> will span 16.66% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-2"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>
      
      <h3>col-1</h3>
      <p>Added v1.0.0</p>
      <p>A div with the class <code>col-1</code> will span 8.33% of the containers width.</p>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-1"&gt;</span><br>
          <span>&nbsp;&nbsp;&lt;p&gt;Column content here&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>

    <div class="col-12">
      <h2 id="responsive-grid-classes">Responsive Grid Classes</h2>
      <p class="width-6 width-xl-12">You have total control over what happens to the layout as the screen size changes.</p>
      <p class="width-6 width-xl-12">
        An example might be that you have a row of 5 images with the elements having a class of <code>col-2-5</code>.
        This will be very squashed on a smaller screen, so you can apply another class of <code>col-m-6</code> to override
        the default, in this case it will cause the element to span 50% of the width making it a row of 2 images.
      </p>
      <p class="width-6 width-xl-12">If no responsive class is applied then the the column will maintain its structure regardless of the screen size.</p>
      <h3>X-Large Screen (1440px)</h3>
      <p>Added v1.0.0</p>
      <p>The will trigger when the screens width is 1440px or less.</p>
      <ul>
        <li><code>col-xl-12</code> - 100% Width</li>
        <li><code>col-xl-10</code> - 83.33% Width</li>
        <li><code>col-xl-8</code> - 66.66% Width</li>
        <li><code>col-xl-6</code> - 50% Width</li>
        <li><code>col-xl-4</code> - 33.33% Width</li>
        <li><code>col-xl-3</code> - 25% Width</li>
        <li><code>col-xl-2-5</code> - 20% Width</li>
        <li><code>col-xl-2</code> - 16.66% Width</li>
        <li><code>col-xl-1</code> - 8.33% Width</li>
      </ul>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-6 col-xl-12"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This will span 100% when the screen is 1440px or less.&lt;/p&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Taking it from 2 columns to 1 column.&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>

      <h3>Large Screen (1024px)</h3>
      <p>Added v1.0.0</p>
      <p>The will trigger when the screens width is 1024px or less.</p>
      <ul>
        <li><code>col-l-12</code> - 100% Width</li>
        <li><code>col-l-10</code> - 83.33% Width</li>
        <li><code>col-l-8</code> - 66.66% Width</li>
        <li><code>col-l-6</code> - 50% Width</li>
        <li><code>col-l-4</code> - 33.33% Width</li>
        <li><code>col-l-3</code> - 25% Width</li>
        <li><code>col-l-2-5</code> - 20% Width</li>
        <li><code>col-l-2</code> - 16.66% Width</li>
        <li><code>col-l-1</code> - 8.33% Width</li>
      </ul>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-3 col-l-6"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This will span 50% when the screen is 1024px or less.&lt;/p&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Taking it from 4 columns to 2 columns.&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>

      <h3>Medium Screen (768px)</h3>
      <p>Added v1.0.0</p>
      <p>The will trigger when the screens width is 768px or less.</p>
      <ul>
        <li><code>col-m-12</code> - 100% Width</li>
        <li><code>col-m-10</code> - 83.33% Width</li>
        <li><code>col-m-8</code> - 66.66% Width</li>
        <li><code>col-m-6</code> - 50% Width</li>
        <li><code>col-m-4</code> - 33.33% Width</li>
        <li><code>col-m-3</code> - 25% Width</li>
        <li><code>col-m-2-5</code> - 20% Width</li>
        <li><code>col-m-2</code> - 16.66% Width</li>
        <li><code>col-m-1</code> - 8.33% Width</li>
      </ul>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-2 col-m-4"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This will span 33.33% when the screen is 768px or less.&lt;/p&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Taking it from 6 columns to 3 columns.&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>

      <h3>Small Screen (425px)</h3>
      <p>Added v1.0.0</p>
      <p>The will trigger when the screens width is 425px or less.</p>
      <ul>
        <li><code>col-s-12</code> - 100% Width</li>
        <li><code>col-s-10</code> - 83.33% Width</li>
        <li><code>col-s-8</code> - 66.66% Width</li>
        <li><code>col-s-6</code> - 50% Width</li>
        <li><code>col-s-4</code> - 33.33% Width</li>
        <li><code>col-s-3</code> - 25% Width</li>
        <li><code>col-s-2-5</code> - 20% Width</li>
        <li><code>col-s-2</code> - 16.66% Width</li>
        <li><code>col-s-1</code> - 8.33% Width</li>
      </ul>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-2-5 col-s-6"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This will span 50% when the screen is 425px or less.&lt;/p&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Taking it from 5 columns to 2 columns.&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>

      <br>

      <h3>X-Small Screen (375px)</h3>
      <p>Added v1.0.0</p>
      <p>The will trigger when the screens width is 375px or less.</p>
      <ul>
        <li><code>col-xs-12</code> - 100% Width</li>
        <li><code>col-xs-10</code> - 83.33% Width</li>
        <li><code>col-xs-8</code> - 66.66% Width</li>
        <li><code>col-xs-6</code> - 50% Width</li>
        <li><code>col-xs-4</code> - 33.33% Width</li>
        <li><code>col-xs-3</code> - 25% Width</li>
        <li><code>col-xs-2-5</code> - 20% Width</li>
        <li><code>col-xs-2</code> - 16.66% Width</li>
        <li><code>col-xs-1</code> - 8.33% Width</li>
      </ul>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="col-1 col-xs-3"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;This will span 25% when the screen is 375px or less.&lt;/p&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;p&gt;Taking it from 12 columns to 4 columns.&lt;/p&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
    </div>

    <div class="col-12">
      <h2 id="width-classes">Width Classes</h2>
      <p>Added v1.0.0</p>
      <p class="width-6 width-xl-12">Width classes will set the width of an element. An example could be that you want to stop a paragraph from
        stretching too far across the page.</p>
      <p class="width-6 width-xl-12">There is a width class for each of the column sizes including responsive classes, they are listed below.</p>
      <ul>
        <li><code>width-12</code> - 100% Width</li>
        <li><code>width-10</code> - 83.33% Width</li>
        <li><code>width-8</code> - 66.66% Width</li>
        <li><code>width-6</code> - 50% Width</li>
        <li><code>width-4</code> - 33.33% Width</li>
        <li><code>width-3</code> - 25% Width</li>
        <li><code>width-2-5</code> - 20% Width</li>
        <li><code>width-2</code> - 16.66% Width</li>
        <li><code>width-1</code> - 8.33% Width</li>
      </ul>
      <br>
      <p>Some examples of the responsive width classes.</p>
      <ul>
        <li><code>width-xl-3</code> - 25% Width</li>
        <li><code>width-l-4</code> - 33.33% Width</li>
        <li><code>width-m-6</code> - 50% Width</li>
        <li><code>width-s-10</code> - 83.33% Width</li>
        <li><code>width-xs-12</code> - 100% Width</li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="col-12">
      <h2 id="margin-padding">Margin and Padding Classes</h2>
      <p>Added v1.1.2</p>
      <p class="width-6 width-xl-12">These classes can be used to control the padding and margin on elements.</p>
      <ul>
        <li><code>margin-0</code></li>
        <li><code>margin-5</code></li>
        <li><code>margin-10</code></li>
        <li><code>margin-50</code></li>
        <li><code>margin-100</code></li>
      </ul>
      <br>
      <ul>
        <li><code>padding-0</code></li>
        <li><code>padding-5</code></li>
        <li><code>padding-10</code></li>
        <li><code>padding-50</code></li>
        <li><code>padding-100</code></li>
      </ul>
    </div>
  </div>
  
  <!-- Full Width -->
  <div class="container">
    <div class="col-12"><h2 id="grid-examples">Grid Examples</h2></div>
    <div class="col-12 center-text">
      <div class="bg-light-gray">
        <p>col-12</p>
      </div>
    </div>
  </div>
  
  <!-- Half Width -->
  <div class="container center-text">
    <div class="col-6 col-xs">
      <div class="bg-light-gray">
        <p>col-6</p>
      </div>
    </div>
    
    <div class="col-6 col-xs">
      <div class="bg-light-gray">
        <p>col-6</p>
      </div>
    </div>
  </div>
    
  <!-- 1/3 Width -->
  <div class="container center-text">
    <div class="col-4">
      <div class="bg-light-gray">
        <p>col-4</p>
      </div>
    </div>
    
    <div class="col-4">
      <div class="bg-light-gray">
        <p>col-4</p>
      </div>
    </div>
    
    <div class="col-4">
      <div class="bg-light-gray">
        <p>col-4</p>
      </div>
    </div>
  </div>
    
  <!-- 1/4 Width -->
  <div class="container center-text">
    <div class="col-3">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
    
    <div class="col-3">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
    
    <div class="col-3">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
    
    <div class="col-3">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
  </div>
    
  <!-- Split Example -->
  <div class="container center-text">
    <div class="col-6">
      <div class="bg-light-gray">
        <p>col-6</p>
      </div>
    </div>
    
    <div class="col-3">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
    
    <div class="col-3">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
  </div>

  <div class="container center-text">
    <div class="col-8">
      <div class="bg-light-gray">
        <p>col-8</p>
      </div>
    </div>

    <div class="col-4">
      <div class="bg-light-gray">
        <p>col-4</p>
      </div>
    </div>
  </div>

  <div class="container center-text">
    <div class="col-10">
      <div class="bg-light-gray">
        <p>col-10</p>
      </div>
    </div>

    <div class="col-2">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
  </div>

  <!-- 5 Column Special -->
  <div class="container center-text">
    <div class="col-2-5">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>

    <div class="col-2-5">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>

    <div class="col-2-5">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>

    <div class="col-2-5">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>

    <div class="col-2-5">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>
  </div>
  
  <!-- 1/6 Width -->
  <div class="container center-text">
    <div class="col-2">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    
    <div class="col-2">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    
    <div class="col-2">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    
    <div class="col-2">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    
    <div class="col-2">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    
    <div class="col-2">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
  </div>
  
  <!-- 1/12 Width -->
  <div class="container center-text">
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    
    <div class="col-1">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="col-12"><h2 id="responsive-grid-examples">Responsive Grid Examples</h2></div>
  </div>

  <div class="container">
    <div class="col-12">
      <h3>X-Large Screen</h3>
      <p><code>col-6</code> with <code>col-xl-12</code></p>
    </div>
    <div class="col-6 col-xl-12">
      <div class="bg-light-gray">
        <p>col-6</p>
      </div>
    </div>
    <div class="col-6 col-xl-12">
      <div class="bg-light-gray">
        <p>col-6</p>
      </div>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="col-12">
      <h3>Large Screen</h3>
      <p><code>col-3</code> with <code>col-l-6</code></p>
    </div>
    <div class="col-3 col-l-6">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
    <div class="col-3 col-l-6">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
    <div class="col-3 col-l-6">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
    <div class="col-3 col-l-6">
      <div class="bg-light-gray">
        <p>col-3</p>
      </div>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="col-12">
      <h3>Medium Screen</h3>
      <p><code>col-1</code> with <code>col-m-3</code></p>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
    <div class="col-1 col-m-3">
      <div class="bg-light-gray">
        <p>col-1</p>
      </div>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="col-12">
      <h3>Small Screen</h3>
      <p><code>col-2</code> with <code>col-m-4</code></p>
    </div>
    <div class="col-2 col-m-4">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    <div class="col-2 col-m-4">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    <div class="col-2 col-m-4">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    <div class="col-2 col-m-4">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    <div class="col-2 col-m-4">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
    <div class="col-2 col-m-4">
      <div class="bg-light-gray">
        <p>col-2</p>
      </div>
    </div>
  </div>

  <br>

  <div class="container">
    <div class="col-12">
      <h3>X-Small Screen</h3>
      <p><code>col-2-5</code> with <code>col-xs-6</code></p>
    </div>
    <div class="col-2-5 col-xs-6">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>
    <div class="col-2-5 col-xs-6">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>
    <div class="col-2-5 col-xs-6">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>
    <div class="col-2-5 col-xs-6">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>
    <div class="col-2-5 col-xs-6">
      <div class="bg-light-gray">
        <p>col-2-5</p>
      </div>
    </div>
  </div>

  <br>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>