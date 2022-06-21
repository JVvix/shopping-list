<?php
$hostname = "localhost";
$username = "shop";
$password = "ff";
$db = "items";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
	$conn= mysqli_connect($hostname, $username, $password, $db) or die("Connection failed: ".mysqli_connect_error());
	if(isset($_POST['item'])) {
		$item = $_POST['item'];

		$sql = "INSERT INTO `items` (`item`) VALUES ('$item')";

		echo $sql;
		$query = mysqli_query($conn, $sql);
		if ($query) {
			header("Location: http://pi0");
			echo "<meta http-equiv='refresh' content='0'>";
			// echo "<meta http-equiv='refresh' content='0'>";
		// echo "it works!!"; 

		} else {
			echo 'Error Occured';
		}
	}
}
?>
