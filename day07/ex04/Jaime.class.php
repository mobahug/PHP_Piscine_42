<?php
	class Jaime extends Lannister
	{
		function sleepWith($sibling)
		{
			if ($sibling instanceof Tyrion)
			{
				print("Not even if I'm drunk !" . PHP_EOL);
			}
			else if ($sibling instanceof Sansa)
			{
				print("Let's do this." . PHP_EOL);
			}
			else if ($sibling instanceof Cersei)
			{
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			}
		}
	}
?>