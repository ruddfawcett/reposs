<?php
	header("Connection: keep-alive");
	header("Expires: Thu, 01-Jan-70 00:00:01 GMT");
	header("Cache-Control:no-store, no-cache, must-revalidate, post-check=0, pre-check=0, max-age=-1");
	header("Pragma: no-cache");
	header('Content-Type: image/svg+xml; Content-Encoding: gzip; charset=utf-8');

	$curl = curl_init();

	curl_setopt_array($curl,
		array(
			CURLOPT_URL => 'https://api.github.com/repos/'.$_GET['path'],
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_TIMEOUT => '3',
			CURLOPT_HTTPHEADER => array('User-Agent: reposs [shields.io service]')
		)
	);

	$result = json_decode(curl_exec($curl),true);

	curl_close($curl);

	if (array_key_exists('color', $_GET)) {
		$color = $_GET['color'];
	}
	else $color = 'blue';

	if (array_key_exists('style', $_GET) && array_key_exists('style', $_GET) == 'flat') {
		$style = '?style=flat';
	}
	else $style = '';

	// Taken from here: http://stackoverflow.com/a/2510540
	function formatBytes($size, $precision = 2) {
	    $base = log($size) / log(1024);
	    $suffixes = array(' kb', ' mb', ' gb', ' tb');

	    return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
	}

	echo file_get_contents('http://img.shields.io/badge/repo_size-'.str_replace(' ','_',formatBytes($result['size'], 1)).'-'.$color.'.svg'.$style);
?>
