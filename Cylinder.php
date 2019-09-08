<?php
include_once ('Cylinder.php');
class Cylinder extends Cricle {
    public $height;
    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height; // TODO: Change the autogenerated stub
    }
    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
}