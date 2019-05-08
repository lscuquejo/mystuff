<?php

class Painter
{
    public function addShape(Circle $shape){
        return $shape->draw();
    }
}