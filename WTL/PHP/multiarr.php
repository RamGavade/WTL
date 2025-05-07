<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Example</title>
</head>
<body>

<h2>Student Information</h2>

<?php
$c=array(
array("name"=>"Rohan", "age"=>20),
array("name"=>"Rohit", "age"=>30)
);
echo $c[0]["name"]."<br/>";
echo $c[0]["age"]."<br/>";
echo $c[1]["name"]."<br/>";
echo $c[1]["age"]."<br/>";

?>

</body>
</html>
