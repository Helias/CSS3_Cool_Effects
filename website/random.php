<?php
$dir    = 'effects';
$files = array();
$files = scandir($dir);
array_shift($files);
array_shift($files);
$r = rand(0, count($files));
header("Location: effects/$files[$r]");
?>
