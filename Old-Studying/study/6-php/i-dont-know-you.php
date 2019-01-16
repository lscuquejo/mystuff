
  <?php

    if ($_POST){

      $family = array("robin", "robson", "lari", "leo");

      $isKnown = false;

      foreach ($family as $value) {
        // code...
        if ($value == $_POST['name']){

          $isKnown = true;

        }

      }

      if ($isKnown){

        echo "Hi there ".$_POST['name'];

      }else {

        echo "i dont know you ".$_POST['name'];

      }

    }

  ?>

  <form method="post">

    <p>what is ur name</p>

    <input type="text" name="name">

    <input type="submit" value="Submit">

  </form>
