<?php
	/*all data have to be collected otherwise could break*/
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "OK")
	{
		$dir = "./private";
		if (!file_exists($dir))
			mkdir("./private");
		if (!file_exists($dir . "/passwd"))
			file_put_contents($dir . "/passwd", null);
		$user = unserialize(file_get_contents($dir . "/passwd"));
		$user_exist = false;
		//checks for existing users
		if ($user)
		{
			foreach($user as $keys => $values)
			{
				if ($values['login'] === $_POST['login'])
					$user_exist = true;
			}
		}
		if ($user_exist)
			echo "ERROR\n";
		else
		{
			/*creating password*/
			$new_user['login'] = $_POST['login'];
			$new_user['passwd'] = hash('whirlpool', $_POST['passwd']);
			$user[] = $new_user;
			file_put_contents($dir . "/passwd", serialize($user));
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";
?>