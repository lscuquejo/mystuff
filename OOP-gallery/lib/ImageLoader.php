<?php

class ImageLoader extends MyPDO
{

    /**
     * variables
     */

    private $ini;
    private $nextPage;
    private $errorMsg;

    /**
     * function that query for all Images From the data base(array)
     */

    public function queryForImages(){

    $pdo = $this->getPDO();
    $statement = $pdo->prepare("SELECT * FROM `OOPGalleryTable` WHERE 1 ORDER BY `id` DESC  LIMIT :limit OFFSET :offset");
    $statement->bindValue(':limit', (int) $GLOBALS['pagenum'], PDO::PARAM_INT);
    $statement->bindValue(':offset', (int) $this->ini, PDO::PARAM_INT);
    $statement->execute();
    $imagesArray = $statement->fetchAll(PDO::FETCH_ASSOC);
  
    return $imagesArray;
   
    }

    /**
     * sets the $nextPage var value
     */

    public function setNextPage($nextPage){

      $this->nextPage=$nextPage;

    }

    /**
     * Function that sets the ini var and the nextpage var if the values is true or false
     */

    public function settingPages(){

      if($this->nextPage){

        $this->ini = $this->nextPage + 1;

      }else{

        $this->nextPage = 0;
        $this->ini = $this->nextPage;

      }

    }

    /**
     * Function that Counts the lines(rows) based in the DataBase
     */

    public function getLines(){

      $pdo = $this->getPDO();
      $statement = $pdo->prepare("SELECT COUNT(*) FROM `OOPGalleryTable`");
      $statement->execute();
      $lines = $statement->fetchAll(PDO::FETCH_ASSOC);
    
      return $lines[0];

    }

    /**
     * Function that Counts how many pages de the website needs for the footer pagination
     */

    public function countLines(){

      $lines = $this->getLines();
      $count = $lines["COUNT(*)"]/$GLOBALS["pagenum"];

      return $count;

    }

    /**
     * gets the $ini var value
     */

    public function getIni(){

      return $this->ini;
      
    }

    /**
     * gets the $nextPage var value
     */

    public function getNextPage(){

      return $this->nextPage;
      
    }

    /**
     * sets the $errorMsg var value
     */

    public function setErrorMsg($errorMsg){

      $this->errorMsg=$errorMsg;

    }

    /**
     * gets the $errorMsg var value
     */

    public function getErrorMsg(){

      return $this->errorMsg;

    }

  }
