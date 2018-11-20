<?php

class ship{

  private $id;

  private $name;

  private $weaponPower = 0;

  private $jediFactor = 0;

  private $strength = 0;

  private $underRepair;

  public function __construct($name){

    $this->name = $name;
    $this->$underRepair = mt_rand(1, 100) < 30;

  }

  public function isFUncional(){

    return !$this->$underRepair;

  }

  public function sayHello(){

    echo "hello";

  }

  public function getName(){

    return $this->name;

  }

  public function getNameAndSpecs($useShortFormat = false){

    if($useShortFormat){
      return sprintf(
        '%s: %s/%s/%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    }else{
      return sprintf(
        '%s: w:%s, j:%s, s:%s',
        $this->name,
        $this->weaponPower,
        $this->jediFactor,
        $this->strength
      );
    }

  }

  public function doesGivenShipHaveMoreStrength($givenShip){

    return $givenShip->strength > $this->strength;

  }

  public function setStrength($strength)
  {

    if (!is_numeric($strength)){
      throw new Exception("invalid strength passed".$strength);
    }

    $this->strength = $strength;

  }

  public function getStrength()
  {

    return $this->strength;

  }

  public function setWeaponPower($weaponPower)
  {

    if (!is_numeric($weaponPower)){
      throw new Exception("invalid weaponPower passed".$weaponPower);
    }

    $this->weaponPower = $weaponPower;

  }

  public function getWeaponPower()
  {

    return $this->weaponPower;

  }

  public function getJediFactor()
  {

    return $this->jediFactor;

  }

  public function setJediFactor($jediFactor)
  {

    if (!is_numeric($jediFactor)){
      throw new Exception("invalid jediFactor passed".$jediFactor);
    }

    $this->jediFactor = $jediFactor;

  }

  public function setName($name)
  {

    $this->name = $name;

  }

  public function getId()
  {

    return $this->id;

  }

  public function setId()
  {

    $this->id = $id;

  }

}

?>
