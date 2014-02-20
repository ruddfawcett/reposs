<?php
	header('Content-Type: image/svg+xml; Connection: keep-alive; Content-Encoding: gzip; charset=utf-8');
	
	$curl = curl_init();
	
	curl_setopt_array($curl,
		array(
			CURLOPT_URL => "https://api.github.com/repos/".$_GET['path'],
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_TIMEOUT => '3',
			CURLOPT_HTTPHEADER => array("User-Agent: sizer [shields.io service]")
		)
	);
	
	$result = json_decode(curl_exec($curl),true);
	
	curl_close($curl);
	
	if (array_key_exists("color", $_GET)) {
		$color = $_GET["color"];
	}
	else $color = "blue";
	
	echo file_get_contents("http://img.shields.io/badge/repo_size-".$result['size']."_kb-".$color.".svg");

?>