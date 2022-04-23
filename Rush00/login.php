<?php

	include "auth.php";

	session_start();

	$check_account = auth($_POST["login"], $_POST["passwd"]);
	if ($check_account)
	{
		$_SESSION["loggued_on_user"] = $_POST["login"];
		echo "OK\n";
		header('Location: profilePage.php');
	}
	else
	{
		$_SESSION["loggued_on_user"] = "";
		echo "ERROR\n";
	}

?>