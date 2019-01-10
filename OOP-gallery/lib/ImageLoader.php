<?php

class ImageLoader extends MyPDO{


    private $ini;
    private $nextPage;

    public function queryForImages(){

    $pdo = $this->getPDO();
    $statement = $pdo->prepare("SELECT * FROM `OOPGalleryTable` WHERE 1 ORDER BY `id` DESC  LIMIT :limit OFFSET :offset");
    $statement->bindValue(':limit', (int) $GLOBALS['pagenum'], PDO::PARAM_INT);
    $statement->bindValue(':offset', (int) $this->ini, PDO::PARAM_INT);
    $statement->execute();
    $imagesArray = $statement->fetchAll(PDO::FETCH_ASSOC);
  
    return $imagesArray;
   
    }

    public function setNextPage($nextPage){

      $this->nextPage=$nextPage;

    }

    public function settingPages(){

      if($this->nextPage){

        $this->ini = $this->nextPage + 1;

      }else{

        $this->nextPage = 0;
        $this->ini = $this->nextPage;

      }

    }

    public function getLines(){

      $pdo = $this->getPDO();
      $statement = $pdo->prepare("SELECT COUNT(*) FROM `OOPGalleryTable`");
      $statement->execute();
      $lines = $statement->fetchAll(PDO::FETCH_ASSOC);
    
      return $lines[0];

    }

    public function countLines(){

      $lines = $this->getLines();
      $count = $lines["COUNT(*)"]/$GLOBALS["pagenum"];

      return $count;

    }

    public function getIni(){

      return $this->ini;
      
    }

    public function getNextPage(){

      return $this->nextPage;
      
    }

  }
