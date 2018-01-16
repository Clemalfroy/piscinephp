#!/usr/bin/php
<?PHP

$argv = array_reverse($argv);
array_pop($argv);
$argv = array_reverse($argv);
$arr = array();
foreach ($argv as $x)
{
	$x = preg_replace('/ +/', ' ', $x);
	$new = explode(" ", $x);
	$arr = array_merge($arr, $new);
}
sort($arr);
foreach ($arr as $y)
{
	echo "$y\n";
}
?>
