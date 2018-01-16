#!/usr/bin/php
<?PHP
$a = array_reverse($argv);
array_pop($a);
$a = array_reverse($a);
foreach($a as $x)
{
		echo "$x\n";
}
?>
