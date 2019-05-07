<?php

class Painter
{
    public function addShape($shape){
        return $shape->draw();
    }
}