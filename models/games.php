<?php

class Game extends Products
{
    public $name;
    public $materials;

    public function __construct($name, $materials)
    {
        $this->name = $name;
        $this->materials = $materials;
    }
}