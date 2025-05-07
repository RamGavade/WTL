<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>

<h2>PHP Array Functions </h2>

<?php
$season = array("summer", "winter", "spring", "autumn");
echo "Array=";
foreach ($season as $s) {
    echo "$s,\n";
}
?>
<h3>1. count()</h3>
<pre>
<?php
echo "Total number of elements in the array: " . count($season);
?>
</pre>

<h3>2. sort()</h3>
<pre>
<?php
$sortedSeason = $season;
sort($sortedSeason);
echo "Sorted array:\n";
foreach ($sortedSeason as $s) {
    echo "$s\n";
}
?>
</pre>

<h3>3. array_reverse()</h3>
<pre>
<?php
$reversedSeason = array_reverse($season);
echo "Reversed array:\n";
foreach ($reversedSeason as $s) {
    echo "$s\n";
}
?>
</pre>

<h3>4. array_search()</h3>
<pre>
<?php
$key = array_search("spring", $season);
echo "Index of 'spring' in the array: " . $key;
?>
</pre>

</body>
</html>
