#!/usr/bin/php
<?PHP

function ft_add($nb1, $nb2)
{
	if (is_numeric($nb1) && is_numeric($nb2))
	{
		echo "$nb1" + "$nb2"."\n";
		return (1);
	}
	return (0);
}
function ft_sub($nb1, $nb2)
{
	if (is_numeric($nb1) && is_numeric($nb2))
	{
		echo "$nb1" - "$nb2"."\n";
		return (1);
	}
	return (0);

}
function ft_time($nb1, $nb2)
{
	if (is_numeric($nb1) && is_numeric($nb2))
	{
		echo "$nb1" * "$nb2"."\n";
		return (1);
	}
	return (0);

}
function ft_div($nb1, $nb2)
{
	if (is_numeric($nb1) && is_numeric($nb2))
	{
		if ($nb2 != 0)
		{
			echo "$nb1" / "$nb2"."\n";
			return (1);
		}
	}
	return (0);
}
function ft_modulus($nb1, $nb2)
{
	if (is_numeric($nb1) && is_numeric($nb2))
	{
		if ($nb2 != 0)
		{
			echo "$nb1" % "$nb2"."\n";
			return (1);
		}
	}
	return (0);
}

if ($argc != 2)
	echo "Incorrect Parameters\n";
else
{
	$new = preg_replace('/ +/', '', $argv[1]);
	if (strpos($new, "+") == false && strpos($new, "/") == false && strpos($new, "-") == false && strpos($new, "*") == false && strpos($new, "%") == false)
		echo "Syntax Error\n";
	else
	{
		$count = 0;
		$new = preg_replace('/ +/', '', $argv[1]);
		$array = explode("+", $new);
		if (count($array) == 2)
			$count += ft_add($array[0], $array[1]);
		$array = explode("*", $new);
		if (count($array) == 2)
			$count += ft_time($array[0], $array[1]);
		$array = explode("-", $new);
		if (count($array) == 2)
			$count += ft_sub($array[0], $array[1]);
		$array = explode("/", $new);
		if (count($array) == 2)
			$count += ft_div($array[0], $array[1]);
		$array = explode("%", $new);
		if (count($array) == 2)
			$count = ft_modulus($array[0], $array[1]);
		if ($count != 1)
			echo "Syntax Error\n";
	}
}
?>
