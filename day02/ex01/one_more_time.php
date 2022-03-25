#!/usr/bin/php
<?php

	$days = array(
		1 => "lundi",
		2 => "mardi",
		3 => "mercredi",
		4 => "jeudi",
		5 => "vendredi",
		6 => "samedi",
		7 => "dimanche"
	);

	$months = array(
		1 => "janvier",
		2 => "février",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "aout",
		9 => "septembre",
		10 => "octobre",
		11 => "novembre",
		12 => "décembre"
	);
	if ($argc > 1)
	{
		$data = explode(' ', $argv[1]);
		$timepattern = "/(^0[0-9]$|1[0-9]|2[0-3]):(0[0-9]|[0-5][0-9]):(0[0-9]|[0-5][0-9])$/";
		$datepattern = "/(^[1-9]$|^1[0-9]$|^2[0-9]$|^3[0-1])$/";
		if (count($data) == 5)
		{
			$day = array_search(lcfirst($data[0]), $days, 1);
			$date = preg_match($datepattern, $data[1]);
			$month = array_search(lcfirst($data[2]), $months, 1);
			$year = intval($data[3]);
			$time = preg_match($timepattern, $data[4]);
		}
		else
			echo "Wrong format";
	}

//	$currentTime;
//	$res = time($currentTime);
//	echo $res . "\n";
?>