#!/usr/bin/php
<?php
$url = $argv[1];

if (!filter_var($url, FILTER_VALIDATE_URL))
	die("Not a valid URL\n");

$page = file_get_contents($url);

if (preg_match_all('/<img\s+[^>]*src="([^"]*\.\w+)"[^>]*>/is', $page, $matches))
{
	$folder = parse_url($url)["host"];
	mkdir($folder);
	foreach($matches[1] as $i => $match)
		download_image($match, $folder . '/' . basename($match));
}

function download_image($image_url, $image_file){
	$fp = fopen ($image_file, 'w+');
	$ch = curl_init($image_url);
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 2000);
	curl_exec($ch);
	curl_close($ch);
	fclose($fp);
}
?>