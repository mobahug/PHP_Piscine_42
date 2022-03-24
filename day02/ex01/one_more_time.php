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
		if ($data[1] = array_keys($days, "lundi"))
		{
			echo $days . "sucess" . "\n";
		}
		else
			echo "false";
	}

//	$currentTime;
//	$res = time($currentTime);
	echo $res . "\n";
?>