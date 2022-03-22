<?php
	function ft_split($str)
	{
		$hamburger = array_filter(explode(' ', $str));
		sort($hamburger);
		return $hamburger;
	}
?>
