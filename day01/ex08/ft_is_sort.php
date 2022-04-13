<?php
	function ft_is_sort($str)
	{
		$temp = $str;
		sort($temp);
		if ($temp == $str)
			return true;
		else
			return false;
	}
?>