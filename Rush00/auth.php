<?php

	function auth($login, $passwd)
	{
		if (!$login || !$passwd)
			return 0;
		$data = unserialize(file_get_contents("./private/passwd.csv"));
		foreach ($data as $user)
		{
			if ($user["login"] === $login && $user["passwd"] === hash("whirlpool", $passwd))
				return 1;
		}
		return 0;
}
?>
