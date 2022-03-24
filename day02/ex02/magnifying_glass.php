#!/usr/bin/php
<?php
	$str = "cyan.com title=a link>This is a link</a>";

	$pattern = "/\W\D/";
	$res = preg_match($pattern, ' ', $str);
	print_r($res);


	//preg_match_all("/\s.*?/", ' ' ,$str);

?>