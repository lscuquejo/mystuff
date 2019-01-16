<?php

  abstract class AbstractShip
  {

    private $id;

    private $name;

    private $weaponPower = 0;

    private $strength = 0;

    abstract public function getJediFactor();

    abstract public function getType();

    abstract public function isFunctional();

    public function __construct($name){

      $this->name = $name;

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
          $this->getJediFactor(),
          $this->strength
        );
      }else{
        return sprintf(
          '%s: w:%s, j:%s, s:%s',
          $this->name,
          $this->weaponPower,
          $this->getJediFactor(),
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

    public function setName($name)
    {

      $this->name = $name;

    }

    public function getId()
    {

      return $this->id;

    }

    public function setId($id)
    {

      $this->id = $id;

    }

  }


?>
