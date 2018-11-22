<?php

  include 'config.php';

  $id = mysqli_real_escape_string($link, $_GET['id']);

  $query = "SELECT * FROM gallery_images WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  $gallery = mysqli_fetch_assoc($result);

  $query ="UPDATE gallery_images SET download_c = download_c + 1 WHERE id = '$id'";
        
  $result = mysqli_query($link, $query);

  $file_url = 'usersimg/'.$gallery["uploaded_image"];
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
readfile($file_url);

?>
