<?php
$filename = "march29.php";
$file = fopen($filename, 'r');
$filesize = filesize($filename);
$filedata = fread($file, $filesize);
echo htmlentities($filedata);
?>