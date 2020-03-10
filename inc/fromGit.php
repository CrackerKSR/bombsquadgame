<?php

$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, 'https://github.com/Mrmaxmeier/BombSquad-Community-Mod-Manager/tree/master/mods');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$bs = curl_exec($cURLConnection);
curl_close($cURLConnection);

$fileLink =  Array();
$fileName = Array();
preg_match_all("/\/Mrmaxmeier\/BombSquad-Community-Mod-Manager\/blob\/master\/mods\/[a-z,A-Z,_]+(.py)/",
    $bs, $out, PREG_PATTERN_ORDER);

foreach ($out[0] as $key => $value) {
	$removeBlob =  str_replace("/blob","",$value);
	$full_Link = 'https://raw.githubusercontent.com'.$removeBlob;
	array_push($fileLink,$full_Link);

	$filePy = preg_replace("/\/Mrmaxmeier\/BombSquad-Community-Mod-Manager\/master\/mods\//", "", $removeBlob);
	$file = preg_replace("/(.py)/", "", $filePy);
	// get full wokring link of each mod and store in array

	array_push($fileName,$file);

};


// use $rawPy[index] to access particular file.
// or loop through it to access all  
?>