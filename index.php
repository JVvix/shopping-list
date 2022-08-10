<!DOCTYPE html>
<html lang="en">
<?php
$hostname = "localhost";
$username = "shop";
$password = "ff";
$db = "items";
$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

$query = mysqli_query($dbconnect, "SELECT * FROM items")
	or die (mysqli_error($dbconnect));

/* echo "<form action='addItem.php' method='POST'>";

while ($row = mysqli_fetch_array($query)) {
	echo "<label>
		<input type='checkbox' name='item[]' value='{$row['item']}'>
		<span>{$row['item']}</span>
		</label>\n <br>";
}
echo "<input type='submit' name='delete' value='Delete'>
	</form>" */

?>
<!--
<form action="addItem.php" method="POST"> 
	<label for=item>add item: </label><input type="text" name="item" id="item" required><br>
	<input type="submit" name="submit">
</form>   
-->
<head>
  <meta charset=utf-8>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>Shopping List</title>
  <link href=http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,700,300italic,400italic,500italic,700italic rel=stylesheet>
  <link href=http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic rel=stylesheet>
  <link href=http://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css rel=stylesheet>
  <style>
    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      text-rendering: optimizeLegibility;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      font-kerning: auto;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      -o-user-select: none;
      user-select: none;
      cursor: default;
      outline: none;
    }
    html, body {
      -webkit-tap-highlight-color: transparent;
      background: royalblue;
      margin: 0;
      font-weight: 400;
      font-family: 'Source Sans Pro', 'Open Sans', Roboto, 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', 'Myriad Pro', 'Segoe UI', Myriad, Helvetica, 'Lucida Grande', 'DejaVu Sans Condensed', 'Liberation Sans', 'Nimbus Sans L', Tahoma, Geneva, Arial, sans-serif;
      padding: .5em;
    }
    aside {
      max-width: 600px;
      margin: 0 auto;
      background: white;
      box-shadow: rgba(0,0,0,.15) 5px 10px 30px;
      padding: 1em;
    }
    h1 {
      text-align: center;
      margin: .5em 0 .25em 0;
      font-size: 30pt;
      font-weight: 600;
      line-height: 1.1;
      letter-spacing: -.02em;
      font-family: 'Fira Sans', 'Source Sans Pro', 'Open Sans', Roboto, 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', 'Myriad Pro', 'Segoe UI', Myriad, Helvetica, 'Lucida Grande', 'DejaVu Sans Condensed', 'Liberation Sans', 'Nimbus Sans L', Tahoma, Geneva, Arial, sans-serif;
        font-family: 'Playfair Display', 'PT Serif', Cambria, 'Hoefler Text', Utopia, 'Liberation Serif', 'Nimbus Roman No9 L Regular', Times, 'Times New Roman', serif;
        font-style: italic;
    }
.button {
flex-grow: 1;
	text-align: center;
	height: 70px;	
font-size: 15pt;
display: block;
margin: auto;
justify-content: center;
}
.button2 {
flex-grow: 1;
display: block;
margin: auto;
	height: 70px;	
font-size: 15pt;
	text-align: center;
}
    label {
      display: block;
      padding: 1em;
      margin: 0;
      cursor: pointer;
      position: relative;
      padding-left: 2em;
    }
    label:last-of-type {
      margin-bottom: 0;
    }
    [type=checkbox] {
      display: none;
    }
    [type=text],
    [type=button] {
      -webkit-appearance: none;
      appearance: none;
      font-weight: 400;
      font-family: 'Open Sans', 'Source Sans Pro', Roboto, 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', 'Myriad Pro', 'Segoe UI', Myriad, Helvetica, 'Lucida Grande', 'DejaVu Sans Condensed', 'Liberation Sans', 'Nimbus Sans L', Tahoma, Geneva, Arial, sans-serif;
      width: calc(100% - 3em);
      -webkit-user-select: text;
      -moz-user-select: text;
      -ms-user-select: text;
      -o-user-select: text;
      user-select: text;
      padding: .5em .6em;
      font-size: 14pt;
      border: none;
      border-bottom: 1px solid currentcolor;
      background: white;
      border-radius: 0;
    }
    [type=button] {
      width: 2em;
      margin-left: 1em;
      border: none;
    }
    div {
      opacity: .5;
      margin-top: 1em;
    }
    input:checked + span {
      opacity: .3;
      text-decoration: line-through;
    }
    span {
      font-size: 14pt;
      line-height: 1.3;
      cursor: pointer;
      transition: opacity .5s ease-in-out;
    }
    span:before {
      content: '\f372';
      font-family: 'ionicons';
      position: absolute;
      top: calc(50% - 9pt);
      left: 0;
      font-size: 18pt;
      line-height: 1;
    }
    input:checked + span:before {
      content: '\f373';
    }
    @media (min-width: 600px) {
      aside {
        margin: 2em auto;
        padding: 1em 2em;
      }
      label {
        padding-left: 3em;
      }
      h1 {
      font-size: 40pt;
      }
      span {
        font-size: 18pt;
      }
      span:before {
        top: calc(50% - 12pt);
        font-size: 24pt;
      }
    }
  </style>
</head>
<body>
  <aside>
    <h1>Groceries</h1>

	<?php

	$query = mysqli_query($dbconnect, "SELECT * FROM items")
	   or die (mysqli_error($dbconnect));

echo "<form action='addItem.php' method='POST'>";

while ($row = mysqli_fetch_array($query)) {
	echo "<label>
		<input type='checkbox' name='item[]' value='{$row['item']}'>
		<span>{$row['item']}</span>
		</label>\n <br>";
}

  echo "<input class='button' type='submit' name='delete' value='Remove Checked Item(s)'>
  </form>";

  echo "<form action='addItem.php' method='post'>
    <input type='text' name='item' required>
    <input class='button2' type='submit' name='submit' value='Add Item'>
  </form>";
  /* 	while ($row = mysqli_fetch_array($query)) {
      echo
    "<label>
    <input type=checkbox>
        <span>{$row['item']}</span>
     </label>\n";

  } */
  ?>
  <!--
  <form action="addItem.php" method="post">
    <input type="text" name="item">
    <input type="submit" name="submit" value="Submit">
  </form> -->

  <?php
  /* $sqlcmd = "INSERT into items (item) values ('" . $_POST["item"] . "');";
  $query = mysqli_query($dbconnect, "SELECT * FROM items");
  $query = mysqli_query($dbconnect, "INSERT into items (item) values ('" . $_POST["item"] . "');"); */
  ?>
    </aside>
  <!--
    <script>
      // Add Additional Items
      var aside = document.querySelector('aside'),
          div = document.createElement('div'),
          text = document.createElement('input'),
          button = document.createElement('input')
      text.type = 'text'
      text.id = 'input'
      button.type = 'button'
      button.setAttribute('data-button','outline')
      button.value = '➕'
      button.setAttribute('onclick','addItem(input.value)')
      //button.setAttribute('onclick',confirm('hello?')
      //console.log(input.value)
      div.appendChild(text)
      div.appendChild(button)
      aside.appendChild(div)

      function addItem(text){
      console.log(text)
        var div = document.querySelector('div'),
            input = document.getElementById('input')
        if (text !== ''){
          input.value = ''
          var label = document.createElement('label'),
              input = document.createElement('input'),
              span = document.createElement('span')
          input.type = 'checkbox'
          span.innerHTML = text
          label.appendChild(input)
          label.appendChild(span)
    div.parentNode.insertBefore(label,div)
    
        }
      }
    </script>
  </body>
  </html>
