#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$arr = preg_split("/\s+/", trim($argv[1]));
		array_push($arr, array_shift($arr));
		echo implode(" ", $arr) . "\n";
	}
?>