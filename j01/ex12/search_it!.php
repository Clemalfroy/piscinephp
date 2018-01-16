#!/usr/bin/php
<?PHP

if ($argc >= 2)
{
	$key = $argv[1];

	unset($argv[0], $argv[1]);
	foreach ($argv as $x)
	{
		$new = explode(":", $x);
		if ($new[0] == $key)
			$value = $new[1];
	}
	if ($value != null)
		echo "$value\n";
}
?>
