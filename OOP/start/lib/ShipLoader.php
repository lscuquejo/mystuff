<?php

class ShipLoader
{

  private $pdo;

  private $dbDsn;

  private $dbUser;

  private $dbPass;

  public function __contruct($dbDsn, $dbUser, $dbPass)
  {
    $this->dbDsn = $dbDsn;
    $this->dbUser = $dbUser;
    $this->dbPass = $dbPass;
  }

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

      $pdo = $this->getPDO();  $statement = $pdo->prepare("SELECT * FROM ship WHERE id = :id");
      $statement->execute(array('id' => $id));
      $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

      if (!$shipArray){
        return null;
      }

      return $this->createShipFromData($shipArray);
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

      $pdo = $this->getPDO();
      $statement = $pdo->prepare("SELECT * FROM ship");
      $statement->execute();
      $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

      return $shipsArray;

    }

    private function getPDO(){

      if ($this->pdo === null) {
        $pdo = new PDO($this->dbDsn, $this->dbUser, $this->dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo = $pdo;
      }

      return $this->pdo;

    }

}
?>
