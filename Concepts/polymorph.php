<html>
<body>

<h1> the fruit program :) </h1>

<?php

class fruit {
	public $name;
	public $color;

	function __construct($name, $color) {
		$this->name = $name;
		$this->color = $color;
	}
	public function  intro() {
		echo "A {$this->name} is a {$this->color} fruit!";
	}
}
class Cherry extends fruit {
	public $weight;
	public function __construct($name, $color, $weight) {
		$this->name = $name;
		$this->color = $color;
		$this->weight = $weight;
	}
	public function  intro() {
		echo "A {$this->name} is a {$this->color} fruit that weighs {$this->weight} grams!";
	}
}
	$cherry = new Cherry ("Cherry", "hot pink", 999);
	echo "<br>";
	$cherry->intro();

/* $strawberry = new Fruit("Strawberry", "Hot Pink");
echo $strawberry->get_name();
echo "<br>";
echo $strawberry->get_color(); */

?>
</body>
</html>
