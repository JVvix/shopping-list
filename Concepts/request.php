<?php
if(isset($_REQUEST["name"]) || isset($_POST["age"])) {
	echo "Hello, ". $_REQUEST["name"] ."!</br>";
	echo "You're ". $_POST["age"] ." years old!";

	exit();
}
?>

<html>
<body>
<form action = "<?php $_PHP_SELF ?>" method= "POST">
	Name: <input type="text" name = "name" />
	Age: <input type="text" name = "age" />
	<input type="submit"/>
</form>
</body>
</html>
