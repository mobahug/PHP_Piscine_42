<?php
	/*all data have to be collected otherwise could break*/
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] == "OK")
	{
		$dir = "./private";
		$user = unserialize(file_get_contents($dir . "/passwd"));
		/*checks for existing pw*/
		if ($user)
		{
			$user_exist = false;
			foreach($user as $keys => $values)
			{
				if ($_POST['login'] === $values['login'] && hash('whirlpool', $_POST['oldpw']) === $values['passwd'])
				{
					$user_exist = true;
					$user[$keys]['passwd'] = hash('whirlpool', $_POST['newpw']);
				}
			}
			if ($user_exist)
			{
				file_put_contents($dir . "/passwd", serialize($user));
				echo "OK\n";
			}
			else
				echo "ERROR\n";
		}
		else
			echo "ERROR\n";
	}
	else
		echo "ERROR\n";
?>