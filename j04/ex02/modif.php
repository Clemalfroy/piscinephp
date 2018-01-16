<?PHP 
$user = $_POST['login'];
$newpasswd= $_POST['newpw'];
$oldpasswd = $_POST['oldpw'];
if ($_POST['submit'] != "OK")
{
	echo "ERROR\n";
	return ;
}

function update_password($accounts, $index, $newhash) {
	$accounts[$index]['passwd'] = $newhash;
	file_put_contents("../htdocs/private/passwd", serialize($accounts));
}

if ($user && $newpasswd && $oldpasswd && $user != "" && $newpasswd != "" && $oldpasswd != "")
{
	if (file_exists("../htdocs/private/passwd") == TRUE)
		$accounts = unserialize(file_get_contents("../htdocs/private/passwd"));
	else {
		echo "ERROR\n";
		return ;
	}
	for($i = 0; $i < count($accounts); $i++)
	{
		if ($accounts[$i]['login'] == $user) {
			if ($accounts[$i]['passwd'] == hash("whirlpool", $oldpasswd))
			{
				update_password($accounts, $i, hash("whirlpool", $newpasswd));
				echo "OK\n";
				return ;
			}
		}
	}
}
echo "ERROR\n";
?>
