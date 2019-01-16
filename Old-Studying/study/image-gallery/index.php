<?php

                    $var    = 'img';


                    $gallery = scandir($var);

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet"

    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

    <title>Image Gallery</title>

  </head>

  <body>

    <?php

      $i=0;

      while ($i < sizeof($gallery)) {

    ?>

    <img src="img/<?php echo $gallery[$i];?>" alt="">

    <?php

    $i++;

    }

    ?>

  </body>

</html>
