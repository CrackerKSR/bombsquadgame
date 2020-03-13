<?php

// get file name 
$fname = $_POST['fname']; 
// get download link
$flink = $_POST['flink'];

	// set file type i.e. PY
	header('Content-type: application/py');
	// set file name
	header('Content-Disposition: attachment; filename='.$fname);
	// finally read // this line will actually download the file 
	readfile("$flink");

?>
