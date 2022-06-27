<?php
	$selectedFruits = $_POST['fruit'];
	if(empty($selectedFruits)) {
		echo("You didn't select any fruit(s).");
	} else {
		$N = count($selectedFruits);

		echo("You selected $N fruits(s): ");
		for($i=0; $i < $N; $i++)
		{
			echo($selectedFruits[$i] . " ");
		}
	}
?>
