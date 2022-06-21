<!DOCTYPE html>
<html lang="en">

<?php
$hostname = "localhost";
$username = "shop";
$password = "ff";
$db = "items";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

$query = mysqli_query($dbconnect, "SELECT * FROM items")
or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
	echo "<label>
		<input type=checkbox value={$row['item']}>
		<span>{$row['item']}</span>
		</label>\n <br>";
}

?>
<form action="addItem.php" method="POST"> 
	<label for=item>add item: </label><input type="text" name="text" id="name" required><br>
	<input type="submit" name="submit">
</form> 
