<?php
if ($_GET["action"])
{
	if ($_GET["action"] == "set" && $_GET["name"] != '' && $_GET["value"] != '')
		setcookie($_GET["name"], $_GET["value"], time() + (86400 * 30), "/");
	if ($_GET["action"] == "get" && $_GET["name"] != '')
		echo $_COOKIE[$_GET["name"]] . "\n";
	if ($_GET["action"] == "del" && $_GET["name"] != '')
		setcookie($_GET["name"], '', time() - 3600);
}
	/*
	NOTE: this have to recheck on PHP piscine before submition and test
	down is it correctly working, removed !$_GET["value"] != ''
	*/
?>
