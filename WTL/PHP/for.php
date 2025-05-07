<!DOCTYPE html>
<html>
<head>
    <title>for loop</title>
</head>
<body>

<h2>This is Season</h2>

<p>
<?php
//declare array
$season = array ("Summer", "Winter", "Autumn", "Rainy");
//access array elements using foreach loop
foreach ($season as $element) {
echo "$element";
echo "</br>";
}
?>
</p>

</body>
</html>
