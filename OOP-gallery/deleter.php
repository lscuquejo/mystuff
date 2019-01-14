<?php

/**
 * End point that deletes an Image
*/

require __DIR__.'/config.php';

$deleteImage=new Image($dbDsn, $dbUser, $dbPass);
$deleteImage->setId($_POST["deleting"]);
if ($deleteImage->deleteImage()){

    header("Location: ". $myhome);

} else {

    header("Location: ". $myhome."?errormsg=delete");

}