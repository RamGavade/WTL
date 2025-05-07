<!DOCTYPE html>
<html>
<head>
    <title>PHP in HTML Example</title>
</head>
<body>

<h2>Comparing Two Numbers</h2>

<p>
    <?php
       $a = 10;
       $b = 20;
       if ($a > $b)
           echo "a is bigger than b";
       else
           echo "a is not bigger than b";
    ?>
</p>

</body>
</html>
