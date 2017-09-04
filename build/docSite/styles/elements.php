<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Elements</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Elements</h1>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Elements</h1>
        <p>Styles and classes for common HTML elements.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <h1>Heading 1</h1>
      <h2>Heading 2</h2>
      <h3>Heading 3</h3>
      <h4>Heading 4</h4>
      <h5>Heading 5</h5>
      <h6>Heading 6</h6>
    </div>

    <hr>

    <div class="col-12">
      <p>This is a paragraph.</p>
      <a href="#" title="">This is a link.</a>
    </div>

    <hr>

    <div class="col-4 col-m-12">
      <p>Default Table</p>
      <p>By default tables will look like the one below</p>
      <table>
        <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Bill</td>
          <td>20</td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>24</td>
        </tr>
        <tr>
          <td>Jack</td>
          <td>19</td>
        </tr>
        <tr>
          <td>Jeff</td>
          <td>25</td>
        </tr>
        </tbody>
      </table>
    </div>

    <div class="col-4 col-m-12">
      <p>Striped Table</p>
      <p>Added v1.0.0</p>
      <p>To style a table like this add the following class to it <code>striped-table</code></p>
      <table class="striped-table">
        <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Bill</td>
          <td>20</td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>24</td>
        </tr>
        <tr>
          <td>Jack</td>
          <td>19</td>
        </tr>
        <tr>
          <td>Jeff</td>
          <td>25</td>
        </tr>
        </tbody>
      </table>
    </div>

    <div class="col-4 col-m-12">
      <p>Bordered Table</p>
      <p>Added v1.0.0</p>
      <p>To style a table like this add the following class to it <code>bordered-table</code></p>
      <table class="bordered-table">
        <thead>
        <tr>
          <th>Name</th>
          <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Bill</td>
          <td>20</td>
        </tr>
        <tr>
          <td>Jill</td>
          <td>24</td>
        </tr>
        <tr>
          <td>Jack</td>
          <td>19</td>
        </tr>
        <tr>
          <td>Jeff</td>
          <td>25</td>
        </tr>
        </tbody>
      </table>
    </div>

    <hr>

    <div class="col-12">
      <p>Pre text</p>
      <pre>
  function sayHello(name) {
    console.log("Hello " + name);
  }

  sayHello("Sam");
  </pre>

      <p>Code text</p>
      <code>console.log("Hello World");</code>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>