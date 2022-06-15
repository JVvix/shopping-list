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
	function get_name() {
		return $this->name;
	}

	function get_color() {
		return $this->color;
	}
}
$strawberry = new Fruit("Strawberry", "Hot Pink");
echo $strawberry->get_name();
echo "<br>";
echo $strawberry->get_color();

?>
</body>
</html>
