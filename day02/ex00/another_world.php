#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		if ($argv[1])
		{
			$pattern = "/\s+/";
			$str = trim($argv[1]);
			$res = preg_replace($pattern, ' ' ,$str);
			echo $res . "\n";
		}
	}
?>