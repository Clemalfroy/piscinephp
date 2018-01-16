<?PHP
session_start();

if ($_POST['submit'] != "OK")
{
	echo "ERRORrr\n";
	return ;
}

$passwd = $_POST['passwd'];
$user = $_POST['login'];

if ($user && $passwd && strlen($user) > 0 && strlen($passwd) > 0)
{
	if (file_exists("../htdocs/private/passwd"))
		$accounts = unserialize(file_get_contents("../htdocs/private/passwd"));
	else
	{
		if (!file_exists("../htdocs/"))
			mkdir("../htdocs/");
		if (!file_exists("../htdocs/private/"))
			mkdir("../htdocs/private/");
		$accounts = array();
	}
	foreach ($accounts as $x)
	{
		if ($x['login'] == $user)
		{
			echo "ERROR\n";
			return;
		}
	}
	$accounts = array_merge($accounts, array(array("login" => $user, "passwd" => hash("whirlpool", $passwd))));
	file_put_contents("../htdocs/private/passwd", serialize($accounts));
	echo "OK\n";
}
else
	echo "ERROR\n";
?>
