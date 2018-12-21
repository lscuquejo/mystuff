<?php

class Container
{

  private $configuration;

  private $pdo;

  private $shipLoader;

  private $shipStorage;

  private $battleManager;

  public function __construct(array $configuration)
  {

    $this->configuration = $configuration;

  }

  /**
  * @return PDO
  */

  public function getPDO()
  {
    if ($this->pdo === null){
      $this->pdo = new PDO(
        $this->configuration['db_dsn'],
        $this->configuration['db_user'],
        $this->configuration['db_pass']
      );
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $this->pdo;
  }

  public function getShipLoader()
  {

    if ($this->shipLoader === null){
      $this->shipLoader = new ShipLoader($this->getShipStorage());
    }

    return $this->shipLoader;

  }

  /**
  * @returm AbstractShipStorage
  */

  public function getShipStorage()
  {

    if ($this->shipStorage === null){
      $this->shipStorage = new JsonFileShipStorage(__DIR__.'/../../resources/ships.json');
    }

    return $this->shipStorage;

  }

  public function getBattleManeger()
  {

    if ($this->battleManager === null){
      $this->battleManager = new BattleManager();
    }

    return $this->battleManager;

  }

}

?>
