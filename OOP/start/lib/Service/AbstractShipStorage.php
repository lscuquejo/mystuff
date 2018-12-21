<?php

  /**
   * creates an AbstractShipStorage with some abstract funcitons
   */
  abstract class AbstractShipStorage
  {

    abstract public function fetchAllShipsData();

    abstract public function fetchSingleShipData($id);
  }

?>
