#!/usr/bin/php
<?php
	function compare($needle1, $needle2)
	{
		$i = 0;
		$haystack = "abcdefghijklmnopqrstuvwxyz0123456789!\"
				#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		while (($i < strlen($needle1)) || ($i < strlen($needle2)))
		{
			$pos1 = stripos($haystack, $needle1[$i]);
			$pos2 = stripos($haystack, $needle2[$i]);
			if ($pos1 > $pos2)
				return (1);
			else if ($pos1 < $pos2)
				return (-1);
			else
				$i++;
		}
	}
	$first = array_slice($argv, 1);
	$word = array();
		foreach ($first as $elem)
		{
			$temp = preg_split("/\s+/", trim($elem));
			$word = array_merge($word, $temp);
		}
	usort($word, "compare");
	foreach ($word as $elem)
		echo "$elem" . PHP_EOL;
?>