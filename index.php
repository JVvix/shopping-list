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

echo "<form action='addItem.php' method='POST'>";

while ($row = mysqli_fetch_array($query)) {
	echo "<label>
		<input type='checkbox' name='item[]' value='{$row['item']}'>
		<span>{$row['item']}</span>
		</label>\n <br>";
}
echo "<input type='submit' name='delete' value='Delete'>
</form>"

?>

<form action="addItem.php" method="POST"> 
	<label for=item>add item: </label><input type="text" name="item" id="item" required><br>
	<input type="submit" name="submit">
</form> 
