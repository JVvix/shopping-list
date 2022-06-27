<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
	foreach ($_POST as $name => $value) {
		echo $name;
		echo $value;
	}
	/* if($_POST['checkbox']) {
		echo $_POST['checkbox'].name;
	}
	if($_POST['checkbox2']) {
		echo $_POST['checkbox2'];
	} */
}
?>
