<?php
if(isset($_POST['Submit'])){
    $fileName=$_POST['filename'];
$path=$_POST['path'];
$zip = new ZipArchive;
$res = $zip->open($fileName);
if ($res === TRUE) {
  $zip->extractTo($path);
  $zip->close();
  echo 'done!';
} else {
  echo 'error!';
}
}
?>
<style type="text/css">
    .mrg{padding: 10px;}
</style>
<form name="frm" method="post">
    <div class="mrg">
        <input type="text" name="filename" placeholder="Name of the zip file" size="30" required="true">
    </div>
    <div class="mrg">
        <input type="text" name="path" placeholder="Path/folder name of the output directory" size="30" required="true">
    </div>
    <div class="mrg">
        <input type="submit" name="Submit" >
    </div>
</form>
