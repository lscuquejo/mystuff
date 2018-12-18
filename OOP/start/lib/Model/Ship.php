<?php

class ship extends AbstractShip
{

  private $jediFactor = 0;

  private $underRepair;

  public function __contruct($name)
  {

    parent::_construct($name);

    $this->$underRepair = mt_rand(1, 100) < 30;

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

  public function isFunctional(){

    return !$this->underRepair;

  }

  public function getType()
  {

    return 'Empire';

  }

}

?>
