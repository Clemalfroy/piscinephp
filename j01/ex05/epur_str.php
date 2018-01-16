#!/usr/bin/php
<?PHP

function test($str)
{
	$str = preg_replace('/ +/', ' ', $str);
	$coucou = explode(" ", $str);
	$len = count($coucou);
	foreach ($coucou as $x)
	{
		if ($x != $coucou[$len - 1])
			echo "$x ";
		else
			echo "$x\n";
	}
}
if ($argc > 1)
	test($argv[1]);
?>
