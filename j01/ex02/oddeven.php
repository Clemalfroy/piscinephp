#!/usr/bin/php
<?PHP

function my_add($p1)
{
	if (is_numeric($p1))
	{
		if ($p1 % 2 == 0)
			echo "Le chiffre $p1 est Pair\n";
		else
			echo "Le chiffre $p1 est Impair\n";
	}
	else
		echo "'$p1' n'est pas un chiffre\n";

}

while (true)
{
	echo "Entrez un nombre: ";
	$rd = fopen("php://stdin","r");
	$line = fgets($rd);
	if ($line == FALSE)
	{
		echo "^D\n";
		break ;
	}
	$nbr = trim($line);
	my_add($nbr);
}
?>
