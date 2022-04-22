<?php
	class Tyrion extends Lannister
	{
		function sleepWith($sibling)
		{
			if ($sibling instanceof Jaime)
			{
				print("Not even if I'm drunk !" . PHP_EOL);
			}
			else if ($sibling instanceof Sansa)
			{
				print("Let's do this." . PHP_EOL);
			}
			else if ($sibling instanceof Cersei)
			{
				print("Not even if I'm drunk !" . PHP_EOL);
			}
		}
	}
?>