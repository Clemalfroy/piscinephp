<?php
function auth($login, $password)
{
	if ($login == "" || $password == "")
		return false ;
	if (file_exists("../htdocs/private/passwd"))
	{
		$accounts = unserialize(file_get_contents("../htdocs/private/passwd"));
		foreach($accounts as $account)
		{
			if ($account['login'] == $login && $account['passwd'] == hash("whirlpool", $password))
				return true;
		}
	}
	return false;
}

function user_exist($login)
{
	if (file_exists("../htdocs/private/passwd"))
	{
		$accounts = unserialize(file_get_contents("../htdocs/private/passwd"));
		foreach($accounts as $account)
		{
			if ($account['login'] == $login)
				return true;
		}
	}
	return false;
}
?>
