#!/usr/bin/php
<?php
	$stdin = fopen("php://stdin$stdin", "r");
	while ($stdin && !feof($stdin))
	{
		echo "Enter a number: ";
		$num = fgets($stdin);
		if ($num)
		{
			$num = str_replace("\n", "", "$num");
			if (is_numeric($num))
			{
				if ($num % 2 == 0)
					echo "The number " . $num . " is even" . "\n";
				else
					echo "The number " . $num . " is odd" . "\n";
			}
			else
				echo "'" . $num . "' is not a number" . "\n";
		}
	}
	fclose($stdin);
	echo "\n";
?>