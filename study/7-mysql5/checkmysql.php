<?php

  $link = mysqli_connect("localhost", "root", "123mudar", "mystuff");

  if (mysqli_connect_error()){

    die ("There was an error connecting to the database");

  }

  $query = "SELECT * FROM users";

  if (mysqli_query($link, $query)){

    echo "Query was successful";

  }

?>
