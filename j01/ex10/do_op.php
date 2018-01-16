#!/usr/bin/php
<?PHP

function ft_add($nb1, $nb2)
{
	echo "$nb1" + "$nb2"."\n";
}
function ft_sub($nb1, $nb2)
{
	echo "$nb1" - "$nb2"."\n";
}
function ft_time($nb1, $nb2)
{
	echo "$nb1" * "$nb2"."\n";
}
function ft_div($nb1, $nb2)
{
	if ($nb2 != 0)
		echo "$nb1" / "$nb2"."\n";
}
function ft_modulus($nb1, $nb2)
{
	if ($nb2 != 0)
		echo "$nb1" % "$nb2"."\n";
}

function remove_space($argv)
{
	foreach ($argv as $x)
	{
		$argv[$i++] = trim($x);
	}
	return ($argv);
}

if ($argc != 4)
	echo "Incorrect Parameters\n";
else
{
	$argv = remove_space($argv);
	if ($argv[2] == "+")
		ft_add($argv[1], $argv[3]);
	if ($argv[2] == "-")
		ft_sub($argv[1], $argv[3]);
	if ($argv[2] == "*")
		ft_time($argv[1], $argv[3]);
	if ($argv[2] == "/")
		ft_div($argv[1], $argv[3]);
	if ($argv[2] == "%")
		ft_modulus($argv[1], $argv[3]);
}
?>
