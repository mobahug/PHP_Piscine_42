#!/usr/bin/php
<?php
	if (file_exists("/var/run/utmpx"))
	{
		$file = fopen("/var/run/utmpx", "r");
		date_default_timezone_set("Europe/Helsinki");
		while ($fd = fread($file, 628))
		{
			if (strlen($fd) == 628)
			{
				$fd = unpack("a256user/a4id/a32tty/i1pid/i1type/i1time", $fd);
				if ($fd['type'] == 7)
				{
					$usr = trim($fd['user']);
					$dt = trim($fd['tty']);
					$month = date("M", $fd['time']);
					$day = date("j", $fd['time']);
					$time = date("H:i", $fd['time']);
					printf("%-8s %-8s %s %2s %s\n", $usr, $dt, $month, $day, $time);
				}
			}
		}
		fclose($file);
	}
?>