#!/usr/bin/php
<?php
	$first = array_slice($argv, 1);
	$word = array();
	foreach ($first as $elem)
	{
		$temp = preg_split("/\s+/", trim($elem));
		$word = array_merge($word, $temp);
	}
	sort($word);
	foreach ($word as $elem)
		echo "$elem" . "\n";
?>