#!/usr/bin/php
<?PHP

$arr = array();
unset($argv[0]);
foreach ($argv as $x)
{
	$new = explode(" ",$x);
	$arr = array_merge($arr, $new);
}
sort($arr, SORT_FLAG_CASE | SORT_NATURAL);
$new = array();
foreach ($arr as $x)
{
	if ($x == "")
		continue;
	array_push($new, $x);
}

foreach ($new as $x)
{
	if (($x[0] >= "A" && $x[0] <= "Z") || ($x[0] >= "a" && $x[0] <= "z"))
		echo "$x\n";
}
sort($new, SORT_STRING);
foreach ($new as $x)
{
	if (is_numeric($x))
		echo "$x\n";
}

foreach ($new as $x)
{
	if (is_numeric($x))
		continue;
	if (($x[0] >= "A" && $x[0] <= "Z") || ($x[0] >= "a" && $x[0] <= "z"))
		continue;
	echo "$x\n";
}

?>
