<?php

class Image extends MyPDO
{
    /**
     * variables
     */
    private $name;
    private $imageName;
    private $id;
    private $viewC;
    private $downloadC;
    private $file;
    private $fileType;

    /**
     * function that check upload form if its an image or the name is empty
     */

    public function checkUpload(){

        if ($this->name == '' && ($this->fileType != 'image/png' &&
         $this->fileType != 'image/jpeg' && $this->fileType != 'image/jpg')){

            return true;

        }else{

            return false;

        }

    }

    /**
     * function that gets Image by its Images name
     */

    private function getImageByImageName()
    {

        $pdo = $this->getPDO();
        $statement = $pdo->prepare("SELECT * FROM `OOPGalleryTable` WHERE id = '$this->imageName'");
        $statement->execute();
        $imageData = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $imageData[0];

    }

    /**
     * function that incrementsViewCounter
     */

    public function incrementView(){

        $pdo = $this->getPDO();
        $statement = $pdo->prepare("UPDATE `OOPGalleryTable` SET view_c = view_c + 1 WHERE id = '$this->id'");
        $statement->execute();

    }

    /**
     * function that incrementsDownloadCounter
     */

    public function incrementDownload(){

        $pdo = $this->getPDO();
        $statement = $pdo->prepare("UPDATE `OOPGalleryTable` SET download_c = download_c + 1 WHERE id = '$this->id'");
        $statement->execute();

    }

    /**
     * function that gets the image by its id
     */

    public function getImageById()
    {

        $pdo = $this->getPDO();
        $statement = $pdo->prepare("SELECT * FROM `OOPGalleryTable` WHERE id = '$this->id'");
        $statement->execute();
        $imageData = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $imageData[0];

    }

    /**
     * function that deletes an image from the Dir.usersimgs
     */

    private function delFromDir()
    {

        $dataFromImg = $this->getImageById();
        $imageThatWillDelete = "usersimgs/".$dataFromImg['uploaded_image'];
        return unlink($imageThatWillDelete);
    
    }

    /**
     * function that deletes an image from the DataBase"pdo"
     */

    private function delFromDB()
    {

        $pdo = $this->getPDO();
        $delFromPdo = $pdo->prepare("DELETE FROM `OOPGalleryTable` WHERE `id` = '$this->id'");
        return $delFromPdo->execute();

    }

    /**
     * Method that merges the delFromDir() and the delFromDB()
     */

    public function deleteImage(){

        
        if ($this->delFromDir() && $this->delFromDB()){

            return true;

        } else {

            return false;

        }

    }

    /**
     * function that inserts images data in the DataBase
     */

    private function writeInDataBase(){

        $pdo = $this->getPDO();
        $insertInPdo = $pdo->prepare("INSERT INTO `OOPGalleryTable` (`name`, `uploaded_image`, `download_c`, `view_c`) VALUES (:name,:imageName,0,0)");
        $insertInPdo->bindValue(':name', $this->name, PDO::PARAM_STR);
        $insertInPdo->bindValue(':imageName', $this->imageName, PDO::PARAM_STR);
        return $insertInPdo->execute();

    }

     /**
     * Method that merges the writeInDataBase(), saveImageDir() and checkupload();
     */

    public function saveImage(){
        
        $this->setImageName($this->genRandName($this->file["name"])); 

        if ($this->checkUpload()){}
            if ($this->saveImageDir($this->file)){
                return $this->writeInDataBase();
                
            }else{
                echo "You must to fill all the formulary...";
            }

    }

     /**
     * function that saves image in the directory "usersimgs"
     */

    private function saveImageDir($file){
    
        return move_uploaded_file($this->file['tmp_name'], "usersimgs/".$this->imageName);
    
    }


    /**
     * generates a random name(with an uniq ID) and get the extension of the file name(png,jpg...)
     */

    private function genRandName($x){

        $ext = pathinfo($x, PATHINFO_EXTENSION);

        $randName=uniqid().".".$ext;

        return $randName;

    }

    /**
     * set the $imageName var value
     */

    public function setImageName($imageName){

        $this->imageName=$imageName;

    }

     /**
     * set the $name var value
     */

    public function setName($name){

        $this->name=$name;
        
    }

     /**
     * set the $id var value
     */


    public function setId($id){

        $this->id=$id;
        
    }

     /**
     * set the $viewC var value
     */

    public function setViewC($viewC){

        $this->viewC=$viewC;
        
    }

     /**
     * set the $DownloadC var value
     */

    public function setDownloadC($downloadC){

        $this->DonwloadC=$downloadC;
        
    }

     /**
     * set the $file var value
     */

    public function setFile($file){

        $this->file=$file;
        
    }

    /**
     * set the $fileType var value
     */

    public function setfileType($fileType){

        $this->fileType=$fileType;
        
    }

     /**
     * get the $id var value
     */

    public function getId(){

        return $this->id;

    }

     /**
     * get the $name var value
     */

    public function getName(){

        return $this->name;
        
    }

     /**
     * get the $ImageName var value
     */

    public function getImageName(){

        return $this->imageName;
        
    }

     /**
     * get the $viewC var value
     */


    public function getViewC(){

        return $this->viewC;
        
    }

     /**
     * get the $downloadC var value
     */

    public function getDownloadC(){

        return $this->donwloadC;
        
    }

     /**
     * get the $file var value
     */

    public function getFile(){

        return $this->$file;
        
    }
    
}

?>
