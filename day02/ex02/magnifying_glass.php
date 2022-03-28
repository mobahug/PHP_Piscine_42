#!/usr/bin/php
<?php
	$pattern0 = "/<a.*title=\"(.*?)\"/";
	$pattern1 = "/<a .*?>(.*?)</";
	$str = implode("", file("page.html"));
	preg_match_all($pattern0, $str, $m0);
	preg_match_all($pattern1, $str, $m1);
	$m0 = array_slice($m0, 1);
	$m1 = array_slice($m1, 1);
	foreach ($m1[0] as $string)
		$str = str_replace($string, strtoupper($string), $str);
	foreach ($m0[0] as $string)
		$str = str_replace($string, strtoupper($string), $str);
	echo $str;
?>