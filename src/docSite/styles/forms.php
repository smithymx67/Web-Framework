<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <title>Web Framework | Styles | Forms</title>
  <?php require_once "../includes/header.php"; ?>
</head>
<body>
  <header>
    <div class="container">
      <div class="col-12">
        <h1>Web Framework - Styles - Forms</h1>
      </div>
    </div>
  </header>
  
  <div class="container">
    <div class="col-12">
      <div class="header-text">
        <h1>Forms</h1>
        <p>Styles and classes for forms.</p>
      </div>
    </div>

    <div class="col-12">
      <a href="<?php echo ROOT_DOCSITE_URL . "/styles"; ?>" title="Styles">Go Back</a>
    </div>

    <div class="col-12">
      <label for="text">Text</label>
      <input type="text" id="text" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="text"&gt;Text&lt;/label&gt;</span><br>
        <span>&lt;input type="text" id="text"&gt;</span>
      </div>
      
      <br>
      
      <label for="password" class="lbl-required">Password</label>
      <input type="password" id="password" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="password"&gt;Password&lt;/label&gt;</span><br>
        <span>&lt;input type="password" id="password"&gt;</span>
      </div>
      
      <br>
      
      <label for="email">Email</label>
      <input type="email" id="email" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="email"&gt;Email&lt;/label&gt;</span><br>
        <span>&lt;input type="email" id="email"&gt;</span>
      </div>
      
      <br>
      
      <label for="color">Color</label>
      <input type="color" id="color" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="color"&gt;Color&lt;/label&gt;</span><br>
        <span>&lt;input type="color" id="color"&gt;</span>
      </div>
      
      <br>
      
      <label for="date">Date</label>
      <input type="date" id="date" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="date"&gt;Date&lt;/label&gt;</span><br>
        <span>&lt;input type="date" id="date"&gt;</span>
      </div>
      
      <br>
      
      <label for="datetime">Datetime</label>
      <input type="datetime-local" id="datetime" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="datetime"&gt;Datetime&lt;/label&gt;</span><br>
        <span>&lt;input type="datetime-local" id="datetime"&gt;</span>
      </div>
      
      <br>
      
      <label for="time">Time</label>
      <input type="time" id="time" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="time"&gt;Time&lt;/label&gt;</span><br>
        <span>&lt;input type="time" id="time"&gt;</span>
      </div>
      
      <br>
      
      <label for="file">File</label>
      <input type="file" id="file" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="file"&gt;File&lt;/label&gt;</span><br>
        <span>&lt;input type="file" id="file"&gt;</span>
      </div>
      
      <br>
      
      <label for="number">Number</label>
      <input type="number" id="number" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="number"&gt;Number&lt;/label&gt;</span><br>
        <span>&lt;input type="number" id="number"&gt;</span>
      </div>
      
      <br>
      
      <label for="month">Month</label>
      <input type="month" id="month" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="month"&gt;Month&lt;/label&gt;</span><br>
        <span>&lt;input type="month" id="month"&gt;</span>
      </div>
      
      <br>
      
      <label for="week">Week</label>
      <input type="week" id="week" class="width-6 width-xl-12">
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="week"&gt;Week&lt;/label&gt;</span><br>
        <span>&lt;input type="week" id="week"&gt;</span>
      </div>
      
      <br>
      
      <label for="textarea">Text Area</label>
      <textarea id="textarea" class="width-6 width-xl-12"></textarea>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="textarea"&gt;Text Area&lt;/label&gt;</span><br>
        <span>&lt;textarea id="textarea"&gt;&lt;/textarea&gt;</span>
      </div>
      
      <br>

      <label>Checkbox</label>
      <p>Added v1.0.0</p>
      <p class="width-6 width-xl-12">To style a group of check boxes like the example below, add the class <code>chkbox-group</code> to a <code>div</code>
        that contains a <code>div</code> for each checkbox item.</p>
      <div class="chkbox-group">
        <div><label for="apple"><input type="checkbox" name="checkbox" id="apple"> Apple</label></div>
        <div><label for="banana"><input type="checkbox" name="checkbox" id="banana"> Banana</label></div>
        <div><label for="pear"><input type="checkbox" name="checkbox" id="pear"> Pear</label></div>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="chkbox-group"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div&gt;&lt;label for="apple"&gt;&lt;input type="checkbox" name="checkbox" id="apple"&gt; Apple&lt;/label&gt;&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div&gt;&lt;label for="banana"&gt;&lt;input type="checkbox" name="checkbox" id="banana"&gt; Banana&lt;/label&gt;&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div&gt;&lt;label for="pear"&gt;&lt;input type="checkbox" name="checkbox" id="pear"&gt; Pear&lt;/label&gt;&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>

      <label>Radio</label>
      <p>Added v1.0.0</p>
      <p class="width-6 width-xl-12">To style a group of radio buttons like the example below, add the class <code>radio-group</code> to a <code>div</code>
        that contains a <code>div</code> for each radio item.</p>
      <div class="radio-group">
        <div><label for="male"><input type="radio" name="radio" id="male"> Male</label></div>
        <div><label for="female"><input type="radio" name="radio" id="female"> Female</label></div>
        <div><label for="other"><input type="radio" name="radio" id="other"> Other</label></div>
      </div>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;div class="chkbox-group"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div&gt;&lt;label for="male"&gt;&lt;input type="radio" name="radio" id="male"&gt; Male&lt;/label&gt;&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div&gt;&lt;label for="female"&gt;&lt;input type="radio" name="radio" id="female"&gt; Female&lt;/label&gt;&lt;/div&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;div&gt;&lt;label for="other"&gt;&lt;input type="radio" name="radio" id="other"&gt; Other&lt;/label&gt;&lt;/div&gt;</span><br>
        <span>&lt;/div&gt;</span>
      </div>
      
      <br>

      <label for="select">Select</label>
      <select id="select" class="width-6 width-xl-12">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
      </select>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="select"&gt;Select&lt;/label&gt;</span><br>
        <span>&lt;select id="select"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;option&gt;Option 1&lt;/option&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;option&gt;Option 2&lt;/option&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;option&gt;Option 3&lt;/option&gt;</span><br>
        <span>&lt;/select&gt;</span>
      </div>
      
      <br>
      
      <label for="select1">Select Multiple</label>
      <select multiple id="select1" class="width-6 width-xl-12">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
      </select>
      <div class="code-block width-6 width-xl-12">
        <span>&lt;label for="select"&gt;Select Multiple&lt;/label&gt;</span><br>
        <span>&lt;select multiple id="select"&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;option&gt;Option 1&lt;/option&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;option&gt;Option 2&lt;/option&gt;</span><br>
        <span>&nbsp;&nbsp;&lt;option&gt;Option 3&lt;/option&gt;</span><br>
        <span>&lt;/select&gt;</span>
      </div>
    </div>
  </div>

  <?php require_once "../includes/footer.php"; ?>
</body>
</html>