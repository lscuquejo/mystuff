<?php

  $alumns = array("Leonardo",
                   "Larissa",
                   "Nikola",
                   );

  $subjects = array("Alumns",
                    "Physics",
                    "Music",
                    "Maths",
                    "Latin"
                    );

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

    <title>Marks</title>

  </head>

  <body>

    <table class="table table-dark">

      <thead>

        <tr>
          <?php

          $i = 0;

            while ($i < sizeof($subjects)) {

          ?>

            <th scope="row"><?php echo $subjects[$i];?></th>

          <?php


            $i++;

          }

          ?>

         </tr>

      </thead>

      <tbody>

      <tr>

        <?php

          $i=0;

          while ($i < sizeof($alumns)) {

        ?>

        <th scope="row"><?php echo "$alumns[$i]";?></th>

          <?php

          $tds=0;

          while ($tds < sizeof($alumns)) {
            // code...


            ?>

              <td></td>

         <?php

          $tds++;

          }

           ?>
        <?php

        $i++;

        }
        ?>

      </tr>



  </tbody>

</table>

  </body>

</html>
