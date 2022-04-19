<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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

<table border="1" align="center">
<tr>
  <td>Shopping Item</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM items")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['item']}</td>
   </tr>\n";

}
?>
bottom
</table>
</body>
</html>
