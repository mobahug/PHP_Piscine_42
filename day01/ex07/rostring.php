#!/usr/bin/php
<?php
	$arr = preg_split("/\s+/", trim($argv[1]));
	array_push($arr, array_shift($arr));
	echo implode(" ", $arr) . PHP_EOL;
?>