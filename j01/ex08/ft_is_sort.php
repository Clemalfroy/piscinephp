#!/usr/bin/php
<?PHP
function ft_is_sort($tab)
{
	$new = $tab;
	sort($tab);
	if ($new == $tab)
		return (true);
	return (false);
}
?>
