<?php

  /**
   * creates an ShipStorageInterface
   */
interface ShipStorageInterface
  {
    /**
    *Retuns an array of ships arrays, with keys id, name, weapon, defense.
    *@retun array of ships
    */
    public function fetchAllShipsData();

    /**
    *@parameter integer $id
    *@return array()
    */

    public function fetchSingleShipData($id);
  }

?>
