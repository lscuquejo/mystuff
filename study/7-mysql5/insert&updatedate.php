<?php

  $link = mysqli_connect("localhost", "root", "123mudar", "mystuff");

  if (mysqli_connect_error()){

    die ("There was an error connecting to the database");

  }

  //$query = "INSERT INTO `users` (`email`, `password`) VALUES('kirsten@kirstenpercival.co.uk', 'pogerspogers')";

  $query = "UPDATE `users` SET password = 'asdfvasdfba' WHERE email = 'pogerson@gmail.com' LIMIT 1";

  mysqli_query($link, $query);

  $query = "SELECT * FROM users";

  if ($result = mysqli_query($link, $query)){

    $row = mysqli_fetch_array($result);

    echo "your email is "."$row[emai] "."and your password is "."$row[password]";

  }

?>
