<?php

class ShipLoader
{

  private $shipStorage;

  public function __construct(PdoShipStorage $shipStorage)
  {
    $this->shipStorage = $shipStorage;
  }

  public function getShips()
  {

      $shipData = $this->shipStorage->fetchAllShipData();

      $ships = array();
      foreach ($shipData as $shipData) {

        $ships[] = $this->createShipFromData($shipData);

      }

      return $ships;

    }

    public function findOneById($id)
    {

      $shipArray = $this->shipStorage->fetchSingleShipData($id);

      return $this->createShipFromData($shipArray);
    }

    private function createShipFromData(array $shipData)
    {
      if($shipData['team'] == 'rebel'){
        $ship = new RebelShip($shipData['name']);
      }else{
        $ship = new Ship($shipData['name']);
        $ship->setJediFactor($shipData["jedi_factor"]);
      }

      $ship->setId($shipData['id']);
      $ship->setWeaponPower($shipData["weapon_power"]);
      $ship->setStrength($shipData["strength"]);

      return $ship;
    }

}
?>
