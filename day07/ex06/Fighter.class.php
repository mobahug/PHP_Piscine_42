<?php
	class Fighter
	{
		private $name;
		public function __construct($fighterType)
		{
			/*
			accesing to the "name" variables values and assigning "fighterType" values to it
			what we get from the child (test1) classes
			*/
			$this->name = $fighterType;
		}
		/*function to access and get via a function the values of the name*/
		public function getName()
		{
			return ($this->name);
		}
	}
?>