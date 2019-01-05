<?php

require __DIR__.'/config.php';

$showPost=new Image($dbDsn, $dbUser, $dbPass);
$showPost->setName($_POST["name"]);
$showPost->setFile($_FILES["poggers_file"]);
if($showPost->saveImage()){

    header("Location: ". $myhome);

}
