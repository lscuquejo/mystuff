<?php

    $var    = 'folders';


    $links = scandir($var);

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

    <title>html&links</title>

  </head>

  <body>

    <?php

      $i=0;

      while ($i < sizeof($links)) {

    ?>

    <p>

      <a href="folders/<?php echo $links[$i];?>" alt=""><?php echo $links[$i];?></a>

    </p>

    <?php

    $i++;

    }

    ?>

  </body>

</html>
