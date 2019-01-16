<?php

  mysqli_connect("localhost", "root", "123mudar");

  if (mysqli_connect_error()){

    echo "There was an error connecting to the database";

  } else {

    echo "Database connection succesful!";

  }

?>
