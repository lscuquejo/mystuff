<?php

class Image extends MyPDO
{
    
    private $name;
    private $imageName;
    private $id;
    private $viewC;
    private $downloadC;
    private $file;
    private $delId;
    private $delImageFile;

    private function getImageById()
    {

        $pdo = $this->getPDO();
        $statement = $pdo->prepare("SELECT * FROM `OOPGalleryTable` WHERE id = '$this->id'");
        $statement->execute();
        $imageData = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $imageData;

    }

    public function delFromDir()
    {

        $dataFromImg = $this->getImageById();
        print_r($dataFromImg);die;
        $imageThatWillDelete = "usersimgs/".$dataFromImg['uploaded_image'];
        // echo $imageThatWillDelete; die;
        unlink($imageThatWillDelete);

    }

    private function delFromDB()
    {

        $pdo = $this->getPDO();
        $delFromPdo = $pdo->prepare("DELETE FROM `OOPGalleryTable` WHERE `id` = '$this->id'");
        return $delFromPdo->execute();

    }

    public function deleteImage(){

        $this->getImageById();
        $this->delFromDir();
        // $this->delFromDB();

    }

    /**
     * function that inserts images data in the DataBase
     */

    private function writeInDataBase(){

        $pdo = $this->getPDO();
        $insertInPdo = $pdo->prepare("INSERT INTO `OOPGalleryTable` (`name`, `uploaded_image`, `download_c`, `view_c`) VALUES ('$this->name','$this->imageName',0,0)");
        return $insertInPdo->execute();

    }

     /**
     * Method that merges the writeInDataBase() and the saveImageDir()
     */

    public function saveImage(){
        
        $this->setImageName($this->genRandName($this->file["name"]));       
        if ($this->saveImageDir($this->file)){
            return $this->writeInDataBase();
            
        }else{
            echo "I'am dead";
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

    public function setImageFile($imageFile){

        $this->imageFile=$imageFile;
        
    }

    public function setDelId($delId){

        $this->delId=$delId;
        
    }

    /**
     * set the $imageName var value
     */

    public function setImageName($imageName){

        $this->imageName=$imageName;

     /**
     * set the $name var value
     */

    }

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
