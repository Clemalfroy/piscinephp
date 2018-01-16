#!/usr/bin/php
<?php
if ($argc < 2)
	return;
$file = file_get_contents($argv[1]);
$file = explode("\n\n", $file);
$arr = array();
$final = [];
foreach ($file as $x)
{
	$new = explode("\n",$x);
	$final[$new[1]] = substr($x, strpos($x, "\n"));
}
ksort($final);
$i = 0;
foreach ($final as $x)
{
	echo ++$i."$x\n";
	if (count($final) != $i)
		echo"\n";
}
?>
