<?php

class ShipLoader

{

  public function getShips()

  {

      $shipData = $this->queryForShips();

      $ships = array();
      foreach ($shipData as $shipData) {

        $ships[] = $this->createShipFromData($shipData);

      }

      return $ships;

    }

    public function findOneById($id)
    {

      $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root', '123mudar');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $statement = $pdo->prepare("SELECT * FROM ship WHERE id = :id");
      $statement->execute(array('id' => $id));
      $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

      if (!$shipArray){
        return null;
      }

      return $this->createShipFromData($shipData);
    }

    private function createShipFromData(array $shipData)
    {
      $ship = new Ship($shipData['name']);
      $ship->setId($shipData['id']);
      $ship->setWeaponPower($shipData["weapon_power"]);
      $ship->setJediFactor($shipData["jedi_factor"]);
      $ship->setStrength($shipData["strength"]);

      return $ship;
    }

    private function queryForShips()
    {

      $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root', '123mudar');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $statement = $pdo->prepare("SELECT * FROM ship");
      $statement->execute();
      $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

      return $shipsArray;

    }

}
?>
