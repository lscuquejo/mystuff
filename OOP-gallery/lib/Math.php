<?php

class Math {

    private $a;
    private $b;
    private $talk;
    private $name;

    public function Sum (){
        echo $this->a+$this->b."<br>";
    }

    public function Media ($s1, $s2, $s3, $s4) {
        $media=($s1 + $s2 + $s3 + $s4) / 4;
        echo ($media);
    }

    public function setA ($x) {
        $this->a=$x;
    }

    public function setB ($x) {
        $this->b=$x;
    }

    public function poggers(){

        echo $this->talk;
        echo $this->name;

    }

    public function setName ($name) {
        $this->name=$name;
    }

    public function setTalk ($talk) {
        $this->talk=$talk;
    }

    public function multiplication(){

        echo "The final result of this multiplication is = ".$this->a*$this->b."<br>";

    }

    public function division(){

        echo "The final result of this division is = ".$this->a/$this->b."<br>";

    }

}