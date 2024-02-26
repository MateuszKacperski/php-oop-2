<?php

class Game extends Products
{
    public $name;
    public $materials;
    public $image;

    public function __construct($name, $materials, $image)
    {
        $this->name = $name;
        $this->materials = $materials;
        $this->image = $image;
    }
}