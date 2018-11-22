<?php

class OOPdownload{

  private $id;

  public function treatedId(){

    $id = mysqli_real_escape_string($link, $_GET['id']);

  }
}

?>
