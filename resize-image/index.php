<?php

require_once 'ResizeImage.php';

$resize = new ResizeImage('images/Be-Original.jpg');
$resize->resizeTo(100, 100);
$resize->saveImage('images/be-original-default.jpg');

$resize = new ResizeImage('images/Be-Original.jpg');
$resize->resizeTo(100, 100, 'exact');
$resize->saveImage('images/be-original-exact.jpg');

$resize = new ResizeImage('images/Be-Original.jpg');
$resize->resizeTo(100, 100, 'maxWidth');
$resize->saveImage('images/be-original-maxWidth.jpg');

$resize = new ResizeImage('images/Be-Original.jpg');
$resize->resizeTo(100, 100, 'maxHeight');
$resize->saveImage('images/be-original-maxHeight.jpg');

$resize = new ResizeImage('images/Be-Original.jpg');
$resize->resizeTo(100, 100, 'exact');
$resize->saveImage('images/be-original-exact.jpg', "100", true);

echo 'IMAGE RESIZED';
?>