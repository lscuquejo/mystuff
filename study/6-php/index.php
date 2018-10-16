
  <?php

    $mailTo = "leonardo.s@cuquejo.org";

    $subject = "I hope this works!";

    $body = "I think that you'r great!";

    $headers = "From: oieusouleogamer@gmail.com";

    if (mail ($mailTo, $subject, $body, $headers)){

      echo "The email was sent successfully";


    }else{

      echo "The email could not be sent.";

    }

  ?>

  <form method="post">

    <p>what is ur name</p>

    <input type="text" name="name">

    <input type="submit" value="Submit">

  </form>
