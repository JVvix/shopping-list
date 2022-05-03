<html>
<body>
<?php

$hostname = "localhost";
$username = "shop";
$password = "ff";
$db = "shopping_list";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>

You entered (get method): <?php echo $_GET["item"]; ?><br>
You entered (post method): <?php echo $_POST["item"]; ?><br>
<?php
  $sqlcmd = "INSERT into items (item) values ('" . $_POST["item"] . "');"
	echo $sqlcmd; 
$query = mysqli_query($dbconnect, "SELECT * FROM items")
$query = mysqli_query($dbconnect, "INSERT into items (item) values ('" . $_POST["item"] . "');"
)
?></br>


</body>
</html>
