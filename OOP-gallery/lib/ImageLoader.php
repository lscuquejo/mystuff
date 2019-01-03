<?php

class ImageLoader extends MyPDO{

    public function queryForImages()
    {
  
      $pdo = $this->getPDO();
      $statement = $pdo->prepare("SELECT * FROM OOPGalleryTable");
      $statement->execute();
      $imagesArray = $statement->fetchAll(PDO::FETCH_ASSOC);
  
      return $imagesArray;
  
    }

}

?>
