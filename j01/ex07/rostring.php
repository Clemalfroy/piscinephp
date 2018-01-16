#!/usr/bin/php
<?PHP

$new = preg_replace('/ +/', ' ', $argv[1]);
$new = explode(' ',$new);
array_push($new, $new[0]);
unset($new[0]);
foreach ($new as $x)
{
	echo "$x\n";
}
?>
