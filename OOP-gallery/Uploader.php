<?php

/**
 * End Point That check, set vars and SaveImage
*/

require __DIR__.'/config.php';

$showPost=new Image($dbDsn, $dbUser, $dbPass);
$showPost->setName($_POST["name"]);
$showPost->setFile($_FILES["poggers_file"]);
$showPost->setFileType($_FILES["poggers_file"]['type']);

if ($showPost->saveImage()){    

    header("Location: ". $myhome);

} else { 

    header("Location: ". $myhome."?errormsg=true");
 
}
