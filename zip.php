<?php 

$zip = new ZipArchive();
$res = $zip->open('vendor.zip'); 
if ($res === true){
$zip->extractTo('./');
$zip->close();
echo 'ok'; } else
echo 'failed'; ?>
