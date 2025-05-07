<!DOCTYPE html>
<html>
<head>
    <title>PHP Type Checking Functions</title>
</head>
<body>

<h2>PHP Type Checking Demo</h2>

<?php
$a = null;
echo "<p>is_null: " . (is_null($a) ? "Yes" : "No") . "</p>";
$a = 10;
echo "<p>is_int: " . (is_int($a) ? "Yes" : "No") . "</p>";

$a = "abc";
echo "<p>is_string: " . (is_string($a) ? "Yes" : "No") . "</p>";

$a = true;
echo "<p>is_bool: " . (is_bool($a) ? "Yes" : "No") . "</p>";

$a = 10.5;
echo "<p>is_double: " . (is_double($a) ? "Yes" : "No") . "</p>";

$a = array(1, 2, 3);
echo "<p>is_array: " . (is_array($a) ? "Yes" : "No") . "</p>";

$a = "123";
echo "<p>is_numeric (string 123): " . (is_numeric($a) ? "Yes" : "No") . "</p>";

?>

</body>
</html>
