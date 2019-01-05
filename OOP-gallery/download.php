<?php

  include 'config.php';

  $downloadImage = new Image($dbDsn, $dbUser, $dbPass);
  $downloadImage->setId($_GET["id"]);
  $arrayD = $downloadImage->getImageById();
  $downloadImage->incrementDownload();

    $file_url = 'usersimgs/'.$arrayD["uploaded_image"];
  header('Content-Type: application/octet-stream');
  header("Content-Transfer-Encoding: Binary");
  header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
  readfile($file_url);

?>