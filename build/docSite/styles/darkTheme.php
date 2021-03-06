<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB" class="dark-theme">
<head>
  <title>Web Framework | Styles | Dark Theme</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Dark Theme</h1>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Dark Theme</h1>
        <p>Added v1.0.0</p>
        <p>A dark theme for the framework.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <p>Add the class <code>dark-theme</code> to the html tag.</p>
      <div class="code-block">
        <span>&lt;html class="dark-theme"&gt;&lt;/html&gt;</span>
      </div>
    </div>

    <br>

    <div class="col-12">
      <h2>General Content</h2>
      <p>This is the color of text under the dark theme.</p>
    </div>

    <div class="col-12">
      <div class="dialog">
        <p>This is a default dialog</p>
      </div>

      <div class="dialog danger-dialog">
        <p>This is a default dialog</p>
      </div>

      <div class="dialog warning-dialog">
        <p>This is a default dialog</p>
      </div>

      <div class="dialog success-dialog">
        <p>This is a default dialog</p>
      </div>

      <div class="dialog info-dialog">
        <p>This is a default dialog</p>
      </div>
    </div>

    <div class="col-12">
      <div class="code-block">
        <span>var name = "Sam";</span><br>
        <span>console.log("Hello " + name);</span>
      </div>
    </div>

    <div class="col-4 col-m-12">
      <p>Default Table</p>
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

    <div class="col-12">
      <label for="text">Text</label>
      <input type="text" id="text">

      <label for="textarea">Text Area</label>
      <textarea id="textarea"></textarea>

      <label for="select">Select</label>
      <select id="select">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
      </select>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>