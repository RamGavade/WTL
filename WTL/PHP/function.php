<?php

function proGeek($num1, $num2, $num3)
{
$product = $num1 * $num2 * $num3;
return $product; 
}

$retValue = proGeek(2, 3, 5);
echo "The product is $retValue";
?>