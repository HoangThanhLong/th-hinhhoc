<?php
class Shape{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function show()
    {
        return "I am a shape. My name is $this->name";
    }
}