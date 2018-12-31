<?php

require __DIR__.'./../config.php';

class Image extends MyPDO
{
    private $name;
    private $imageName;
    private $id;
    private $viewC;
    private $downloadC;
    private $file;

    private function writeInDataBase(){

        $pdo = $this->getPDO();
        $insertInPdo = $pdo->prepare("INSERT INTO `OOPGalleryTable` (`name`, `uploaded_image`, `download_c`, `view_c`) VALUES ('$this->name','$this->imageName',0,0)");
        return $insertInPdo->execute();
    

    }

    public function saveImage(){
        
        $this->setImageName($this->genRandName($this->file["name"]));       
        if ($this->saveImageDir($this->file)){
            return $this->writeInDataBase();
            
        }else{
            echo "morreu";
        }

    }

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

    public function setImageName($imageName){

        $this->imageName=$imageName;

    }

    public function setName($name){

        $this->name=$name;
        
    }


    public function setId($id){

        $this->id=$id;
        
    }

    public function setViewC($viewC){

        $this->viewC=$viewC;
        
    }

    public function setDownloadC($downloadC){

        $this->DonwloadC=$downloadC;
        
    }

    public function getId(){

        return $this->id;

    }

    public function getName(){

        return $this->name;
        
    }

    public function getImageName(){

        return $this->imageName;
        
    }

    public function getViewC(){

        return $this->viewC;
        
    }

    public function getDownloadC(){

        return $this->donwloadC;
        
    }

    public function getFile(){

        return $this->$file;
        
    }

    public function setFile($file){

        $this->file=$file;
        
    }
    
}

?>
