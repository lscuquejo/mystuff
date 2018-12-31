<?php

class MyPDO{

  private $pdo;

  private $dbDsn;

  private $dbUser;

  private $dbPass;

  public function __construct($dbDsn, $dbUser, $dbPass)
  {
    $this->dbDsn = $dbDsn;
    $this->dbUser = $dbUser;
    $this->dbPass = $dbPass;
  }

  public function getImages()
  {

      $imageData = $this->queryForImages();

      $images = array();
      foreach ($imageData as $imageData) {

        $images[] = $this->createImageFromData($imageData);

      }

      return $images;

  }

  private function createImageFromData(array $imageData)
  {
    $image = new UploadedImage($imageData['name']);
    $image->setId($imageData['id']);
    $image->setWeaponPower($imageData["uploaded_image"]);
    $image->setJediFactor($imageData["view_c"]);
    $image->setStrength($imageData["download_c"]);

    return $image;
  }

  private function queryForImages()
  {

    $pdo = $this->getPDO();
    $statement = $pdo->prepare("SELECT * FROM OOPGalleryTable");
    $statement->execute();
    $imagesArray = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $imagesArray;

  }

    public function getPDO()
  {

    if ($this->pdo === null){
      $this->pdo = new PDO(
        $this->dbDsn,
        $this->dbUser,
        $this->dbPass
      );
      
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    return $this->pdo;

  }
    
}

?>
