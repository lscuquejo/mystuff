
  <?php

  $family = array(
  'fruta1' =>   $family2 = array(
    'fruta1' => 'manzana',
    'fruta2' => 'naranja',
    'fruta3' => $family3 = array(
      'fruta1' => 'manzana',
      'fruta2' => 'naranja',
      'fruta3' => 'uva',
      'fruta4' => 'manzana',
      'fruta5' => 'manzana'),
    'fruta4' => 'manzana',
    'fruta5' => 'manzana'),
  'fruta2' => 'naranja',
  'fruta3' => 'uva',
  'fruta4' => 'manzana',
  'fruta5' => 'manzana');


    $family2 = array("Robs",$family,"Tommys","Ralphies");

  //  print_r($family2);

    foreach($family2 as $key => $value){

      echo "item ".$key. " is ".$value."<br>\n";

      foreach($value as $key2 => $value2){
        echo "---  item ".$key2. " is ".$value2."<br>\n";
      }

    }

    for ($i = 0; $i < sizeof($family2); $i++) {

      echo $family2[$i]."<br>";

    }

    for ($i = 2; $i <= 30; $i = $i + 2) {

      echo $i."<br>";

    }

    echo "<br>";

    for ($i = 10; $i >= 0; $i--) {

      echo $i."<br>";
    }

  ?>
