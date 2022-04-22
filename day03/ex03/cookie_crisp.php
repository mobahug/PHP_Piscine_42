<?php
	if ($_GET['action'] == 'set' && $_GET['name'] != '');
		setcookie($_GET['name'], $_GET['value']);
	if ($_GET['action'] == 'get' && $_COOKIE[$_GET['name']] && !$_GET['value'])
		echo $_COOKIE[$_GET['name']] . "\n";
	if ($_GET['action'] == 'del' && $_COOKIE[$_GET['name']] && !$_GET['value'])
		setcookie($_GET['name'], "", time()-3600);
?>