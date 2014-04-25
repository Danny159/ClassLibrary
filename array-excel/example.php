<?php
/*
* Array to Excel Class
* Copyright (c) 2014, Danny159.  All rights reserved.
* https://github.com/Danny159
*/

include("excelwriter.class.php");

// Build the data arrays
$array = array();
$tr = array();
$tr[] = 'Col 1';
$tr[] = 'Col 2';
$tr[] = 'Col 3';
$tr[] = 'Col 4';
$array[] = $tr;

foreach($data as $item){
	$tr = array();
	$tr[] = $data[0];
	$tr[] = $data[1];
	$tr[] = $data[2];
	$tr[] = $data[3];
	$array[] = $tr;
}

$excel_class = new ExcelWriter();
$excel_class->LoadFile($array,'namefile.xls');
$DataFile = $excel_class->CreatFile($array);