<?php

require __DIR__.'/config.php';

$viewImage = new Image($dbDsn, $dbUser, $dbPass);
$viewImage->setId($_GET["id"]);
$arrayV = $viewImage->getImageById();
$viewImage->incrementView();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <a href="index.php"><div class="container">

      <div style="width: 50rem; padding-top: 10%; padding-left:5%;">

        <img id="default_image" class="card-img-top" src="usersimgs/<?php echo $arrayV['uploaded_image'];?>" alt="">

      </div>

    </div></a>

  </body>
</html>
