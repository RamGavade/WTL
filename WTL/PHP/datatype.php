<?php
// Integer
$x = 4195;
echo "Value: $x, Type: " . gettype($x) . "\n" ."<br/>";

// Double
$x = 3.14159;
echo "Value: $x, Type: " . gettype($x) . "\n"."<br/>";

// Boolean
$x = true;
echo "Value: " . ($x ? "true" : "false") . ", Type: " . gettype($x) . "\n"."<br/>";

// NULL
$x = null;
echo "Value: null, Type: " . gettype($x) . "\n"."<br/>";

// String
$x = "PHP supports string operations.";
echo "Value: $x, Type: " . gettype($x) . "\n"."<br/>";

// Array
$x = array("apple", "banana", "cherry");
echo "Value: " . implode(", ", $x) . ", Type: " . gettype($x) . "\n"."<br/>";
?>