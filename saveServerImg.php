<?php
$img = $_POST['imgBase64'];
$imgFilename = $_POST['imgFilename'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);

//saving
$fileName = 'userimg/'.$imgFilename.'.png';
$success = file_put_contents($fileName, $fileData);

if($success){
    $conn = mysqli_connect("127.0.0.1","root","helloworld","tapitap");
    $sql = 'INSERT INTO stoffe_img (filename) VALUES ("'.$imgFilename.'.png")';
    $result = mysqli_query($conn, $sql);
    if($result)echo $fileName;
    else echo 'Error occured in saving to datatable';
}else echo 'Unable to save the file.';

?>