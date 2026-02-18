<?php
class Fruit {
    public $name;
    public $color;

    // Wordt uitgevoerd zodra je een object maakt
    function __construct($name, $color) {
        echo "Constructor: Fruit created → $name ($color)<br>";
        $this->name = $name;
        $this->color = $color;
    }

    // Wordt uitgevoerd zodra het object wordt vernietigd (einde script)
    function __destruct() {
        echo "Destructor: Fruit destroyed → $this->name ($this->color)<br>";
    }
}

echo "Start script<br><br>";

$apple = new Fruit("Apple", "Red");
$banana = new Fruit("Banana", "Yellow");

echo "<br>End of script<br>";
?>

