<?php

  include 'config.php';

  $id = mysqli_real_escape_string($link, $_GET['id']);

  $query = "SELECT * FROM gallery_images WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  $gallery = mysqli_fetch_assoc($result);

  $query ="UPDATE gallery_images SET view_c = view_c + 1 WHERE id = '$id'";

  $result = mysqli_query($link, $query);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <img id="default_image" class="card-img-top" src="usersimg/<?php echo $gallery["uploaded_image"];?>" alt="">

  </body>
</html>
