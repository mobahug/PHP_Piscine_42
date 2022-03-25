#!/usr/bin/php
<?php
	// PHP program to demonstrate the strtotime()
	// function when the english text is "now"

	// prints current time in second
	// since now means current
	echo strtotime("now"), "\n";

	// prints the current time in date format
	echo date("Y-m-d", strtotime("now"))."\n";
?>
