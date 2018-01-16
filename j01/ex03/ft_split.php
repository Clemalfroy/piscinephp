#!/usr/bin/php
<?PHP
function ft_split($var)
{
	$var2 = (explode(" ",$var));
	sort($var2);
	return ($var2);
}
?>
