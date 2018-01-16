#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
if ($argc > 1)
{
	$argv[1] = trim($argv[1]);
	$array = array($argv[1]);
	$day = preg_grep('/([mM]ercredi|[lL]undi|[mM]ardi|[jJ]eudi|[vV]endredi|[sS]amedi|[dD]imanche) ([3][0-1]?|[12][0-9]?|[4-9]|[0][0-9]?) ([Nn]ovembre|[Ss]eptembre|[Oo]ctobre|[dD]ecembre|[jJ]anvier|[fF]evrier|[mM]ars|[aA]vril|[mM]ai|[jJ]uin|[jJ]uillet|[aA]out) ([2-9][0-9]{3}|19[7-9][0-9]) ([0-1][0-9]|[2][0-3]):[0-5][0-9]:[0-5][0-9]/',$array);
	if ($day == null)
	{
		echo "Wrong Format\n";
		return ;
	}
	$array = explode(" ", $array[0]);
	$month = array("Janvier", "Fevrier", "Mars", "avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
	$i = 0;
	foreach ($month as $x)
	{
		if ($x == ucfirst($array[2]))
			$array[2] = $i;
		$i++;
	}

	if (strtotime("$array[1]/$array[2]/$array[3] $array[4]"))
		echo strtotime("$array[1]/$array[2]/$array[3] $array[4]")."\n";
}
?>
