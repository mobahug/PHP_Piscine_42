#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$value1 = trim(preg_replace('/\s+/', '', $argv[1]));
		$operator = trim(preg_replace('/\s+/', '', $argv[2]));
		$value2 = trim(preg_replace('/\s+/', '', $argv[3]));

		$value1 = intval($value1);
		$value2 = intval($value2);

		if ($operator == '+')
			$sum = $value1 + $value2;
		else if ($operator == '-')
			$sum = $value1 - $value2;
		else if ($operator == '*')
			$sum = $value1 * $value2;
		else if ($operator == '/')
			$sum = $value1 / $value2;
		else if ($operator == '%')
			$sum = $value1 % $value2;
		echo $sum . PHP_EOL;
	}
	else
		echo "Incorrect Parameters" . PHP_EOL;
?>