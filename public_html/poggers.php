<?php

  $variv = 0;

  if ($_GET['num']) {

    $variv = $_GET['num'];

  }

  $inicial = $variv;

  $final = $variv +9;


?>
    <p>o valor inicial é: <?php echo $inicial ?></p>
    <p>o valor final é: <?php echo $final ?></p>

  <?php if ($variv != 0) {  ?>
    <a href="poggers.php?num=<?php echo $variv -9;?>"><button type="button" name="button">anterior</button></a>
  <?php  }  ?>

  <?php if ($variv <= 200 -9) {    ?>
    <a href="poggers.php?num=<?php echo $variv +9;?>"><button type="button" name="button">proximo</button></a>
  <?php } ?>
