<?php
	class UnholyFactory
	{
		private $fighters = array();
		public function absorb($newTypeFighter)
		{
			/* Fighter is the parent */
			if (get_parent_class($newTypeFighter) == "Fighter")
			{
				/* CHECKS if key (fighters name) already excists */
				if ((array_key_exists(($newTypeFighter)->getName(), $this->fighters)))
				{
					echo "(Factory already absorbed a fighter of type " . $newTypeFighter->getName() . ")" . PHP_EOL;
				}
				/*
				if not exsist will create one
				by accesing to fighters values and add for the keys name
				then we assign that to the absorb function s variable
				*/
				else
				{
					$this->fighters[$newTypeFighter->getName()] = $newTypeFighter;
					echo "(Factory absorbed a fighter of type " . $newTypeFighter->getName() . ")" . PHP_EOL;
				}
			}
			else
			{
				echo "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
			}
		}


		public function fabricate($requestFighters)
		{
			if (array_key_exists($requestFighters, $this->fighters))
			{
				echo "(Factory fabricates a fighter of type " . $requestFighters . ")" . PHP_EOL;
				return (clone $this->fighters[$requestFighters]);
			}
			else
			{
				echo "(Factory hasn't absorbed any fighter of type " . $requestFighters . ")" . PHP_EOL;
			}
		}
	}
?>