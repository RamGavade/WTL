<!DOCTYPE html>
<html>
<head>
    <title>Indexed Array</title>
</head>
<body>

<h2>List of Fruits</h2>

<?php
$fruits = array("Apple", "Banana", "Cherry", "Date");

foreach ($fruits as $index => $fruit) {
    echo "Index: " . $index . " Value: " . $fruit . "<br/>";
}
?>

</body>
</html>
