#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$str = trim(preg_replace("/\s+/", '', $argv[1]));
		preg_match("/([0-9]+)([*\-+%\/])([0-9]+)/", $str, $op);
		if (preg_match("/([^0-9*\-+%\/])/", $str) || $op == NULL)
			echo "Syntax Error" . "\n";
		else
		{
			$value1 = intval($op[1]);
			$value2 = intval($op[3]);
			if ($op[2] == "+")
				$result = $value1 + $value2;
			else if ($op[2] == "-")
				$result = $value1 - $value2;
			else if ($op[2] == "*")
				$result = $value1 * $value2;
			else if ($op[2] == "/")
			{
				if ($value2 == NULL)
					return 0;
				$result = $value1 / $value2;
			}
			else if ($op[2] == "%")
			{
				if ($value2 == NULL)
					return 0;
				$result = $value1 % $value2;
			}
			echo $result . "\n";
		}
	}
	else
		echo "Incorrect Parameters" . "\n";
?>