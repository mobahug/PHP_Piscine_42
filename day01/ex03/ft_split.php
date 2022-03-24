<?php
	function ft_split($str)
	{
		$hamburger = preg_split('/\s+/', $str);
		sort($hamburger);
		return $hamburger;
	}
?>