<?php

  $myUser = "root";
  $myPassword = "123mudar";
  $myHost = "localhost";
  $myDB = "mystuff";

  $imgdir = '/home/leonardo/mystuff/project-gallery/usersimg/';

  $link = mysqli_connect("$myHost", "$myUser", "$myPassword",  "$myDB");

  if (mysqli_connect_error()) {

      die ("There was an error connecting to the database");

  }

?>
