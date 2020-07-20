<?php
$img = $_POST['imgBase64'];
$num = $_POST['action_num'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);

//saving
$fileName = 'tmp/temp'.$num.'.png';
$success = file_put_contents($fileName, $fileData);
print $success ? $fileName : 'Unable to save the file.';

?>