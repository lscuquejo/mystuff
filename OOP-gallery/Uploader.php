<?php

require __DIR__.'/config.php';

$showPost=new Image($dbDsn, $dbUser, $dbPass);
$showPost->setName($_POST["name"]);
$showPost->setFile($_FILES["poggers_file"]);
$showPost->setFileType($_FILES["poggers_file"]['type']);
if($showPost->checkUpload()){

    echo "there was a problem with your image type or the name is empty";

}else{

    $showPost->saveImage();

    header("Location: ". $myhome);

}
