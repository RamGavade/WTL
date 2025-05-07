<!DOCTYPE html>
<html>
<head>
    <title>Class and Object</title>
</head>
<body>
<h2>Car Information</h2>
<?php
class Car {
    public $brand;
    public $color;
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function display() {
        echo "Brand: " . $this->brand . "<br/>";
        echo "Color: " . $this->color . "<br/>";
    }
}
$car1 = new Car("BMW", "Black");
$car2 = new Car("Honda", "Red");

$car1->display();
$car2->display();
?>
</body>
</html>
