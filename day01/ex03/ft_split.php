<?php
	function ft_split($str)
	{
		$hamburger = array_filter(explode(' ', $str));
		sort($hamburger);
		return $hamburger;
	}
?>

<!--
	array_filter	-	just looping through the string

	explode			-	specifying the variable to split
						then using the given variable
-->