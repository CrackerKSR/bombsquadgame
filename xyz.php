<?php

$name= $_POST['file'];
// $link= $_POST['link'][0];
// echo "$name";
echo($_POST['link']);
	header('Content-type: application/pdf');
	header('Content-Disposition: attachment; filename=name');
	readfile($_POST['link']);
?>
