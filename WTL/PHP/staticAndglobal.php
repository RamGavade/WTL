<!DOCTYPE html>
<html>
<head>
    <title>Static and Global Variables in PHP</title>
</head>
<body>
<?php
$x = 5;
$y = 10;

function sum() {
    global $x, $y;
    $y = $x + $y;
    echo "Sum inside function: " . $y . "<br/>";
}

sum();
echo "Value of y after function call: " . $y . "<br/><br/>";

function counter() {
    static $count = 0;
    echo "Counter: " . $count . "<br/>";
    $count++;
}

counter();
counter();
counter();
?>

</body>
</html>
