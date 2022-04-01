<?php
	class NightsWatch implements IFighter
	{
		function fight()
		{
		}
		function recruit($people)
		{
			if (get_class($people) == "JonSnow"
			|| get_class($people) == "SamwellTarly")
			{
				$people->fight();
			}
		}
	}
?>