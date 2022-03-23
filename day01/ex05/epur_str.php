#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = trim($argv[1]);
		$str = preg_replace('/\s+/', ' ', $str);
		if ($str)
		{
			echo $str . "\n";
		}
	}
?>

<!--
	https://stackoverflow.com/questions/13516162/regex-for-single-space

	preq_replace	'/ +/' REGEX code where we specify only one
							single replacement we want
					' '		telling from what we want only one

-->
