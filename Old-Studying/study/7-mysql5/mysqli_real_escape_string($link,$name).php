<?php

  $link = mysqli_connect("localhost", "root", "123mudar", "mystuff");

  if (mysqli_connect_error()){

    die ("There was an error connecting to the database");

  }

  $name = "leonardo";

  $query = "SELECT `email` FROM users WHERE name = '".mysqli_real_escape_string($link, $name)."'";

  if ($result = mysqli_query($link, $query)){

    while ($row = mysqli_fetch_array($result)){

      print_r($row);

    }

  }

?>
