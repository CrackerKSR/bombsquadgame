<?php

$cURLConnection = curl_init();
curl_setopt($cURLConnection, CURLOPT_URL, 'https://files.ballistica.net/bombsquad/builds/');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$bs = curl_exec($cURLConnection);
curl_close($cURLConnection);


 $htmlRemoved = preg_replace('/<[^>]*>/', '', $bs);
// (BombSquad_Android_Generic_)+(.)*(apk)+  this dteects only starting and ending withour caring about types
$pattern = array(
  'android' => '/BombSquad_Android_Generic_+.*apk+/',
  'windows' => '/BombSquad_Windows_+.*zip+/',
  'mac' => '/BombSquad_Mac_+.*zip+/',
  'linux64' => '/BombSquad_Linux_64bit_+.*tar+.gz+/',
  'linux32' => '/BombSquad_Linux_32bit_+.*tar+.gz+/',
  'windows_server' => '/BombSquad_Server_Windows_+.*zip+/',
  'mac_server' => '/BombSquad_Server_Mac_+.*zip+/',
  'linux64_server' => '/BombSquad_Server_Linux_64bit_+.*tar+.gz+/',
  'linux32_server' => '/BombSquad_Server_Linux_32bit_+.*tar+.gz+/',
  'raspberryPi_server' => '/BombSquad_Server_RaspberryPi_+.*tar+.gz+/'
);
// there is no 64 32 varient for windwos
// there are variants of 32 64 for linux only 
$file_name = array();

$arr = array();

// get proper file names
foreach ($pattern as $key => $value) {
  preg_match($pattern[$key],$htmlRemoved,$arr);
  $file_name[$key] = $arr[0];
}

// make proper download links of each files
$download_link = array(
  'playstore_bs' => 'https://play.google.com/store/apps/details?id=net.froemling.bombsquad&hl=en',
  'playstore_bs_remote' => 'https://play.google.com/store/apps/details?id=net.froemling.bsremote&hl=en',
  'playstore_bs_vr' => 'https://play.google.com/store/apps/details?id=net.froemling.bombsquadcb&hl=en'
);

foreach ($file_name as $key => $value) {
  $download_link[$key] = "https://files.ballistica.net/bombsquad/builds/$file_name[$key]";
}


?>