<?php

require __DIR__.'/lib/Image.php';

$showPost=new Image($dbDsn, $dbUser, $dbPass);
$showPost->setName($_POST["name"]);
$showPost->setFile($_FILES["poggers_file"]);
if($showPost->saveImage()){

    header("Location: http://localhost:3000/OOP-gallery/");

}else{

    header("Location: http://localhost:3000/OOP-gallery/?error='error_to_save_image'");

};
