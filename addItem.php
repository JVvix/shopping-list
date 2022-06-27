<?php
$hostname = "localhost";
$username = "shop";
$password = "ff";
$db = "items";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
	$conn= mysqli_connect($hostname, $username, $password, $db) or die("Connection failed: ".mysqli_connect_error());

	$query = mysqli_query($dbconnect, "SELECT * FROM items")
		or die (mysqli_error($dbconnect));

	while ($row = mysqli_fetch_array($query)) {

		$selectedFruits = $_POST['item'];

		if(empty($selectedFruits)) {
			echo("You didn't select any fruit(s).");
			header("Location: http://pi0");
		} else {
			$N = count($selectedFruits);

			echo("You selected $N fruits(s): ");
			while ($row = mysqli_fetch_array($query)) {
				for($i=0; $i < $N; $i++) {
					if($selectedFruits[$i] == $row['item']) {
						$sql = "delete from items where item='{$row['item']}'";
						echo $sql;
						$query = mysqli_query($conn, $sql);
						if ($query) {
							echo 'it works';
						}
					} 
				}
			}
			header("Location: http://pi0");
		}
	}
}
				/* $conn= mysqli_connect($hostname, $username, $password, $db) or die("Connection failed: ".mysqli_connect_error());

				$query = mysqli_query($dbconnect, "SELECT * FROM items")
				or die (mysqli_error($dbconnect)); */

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
	$conn= mysqli_connect($hostname, $username, $password, $db) or die("Connection failed: ".mysqli_connect_error());
	if(isset($_POST['item'])) {
		$item = $_POST['item'];

		$sql = "INSERT INTO `items` (`item`) VALUES ('$item')";

		echo $sql;
		$query = mysqli_query($conn, $sql);
		if ($query) {
			header("Location: http://pi0");
			// echo "<meta http-equiv='refresh' content='0'>";
			// echo "<meta http-equiv='refresh' content='0'>";
			echo "it works!!"; 

		} else {
			echo 'Error Occured';
		}
	}
}
?>
