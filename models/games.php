<?php

class Game
{
    public $name;
    public $materials;

    public function __construct($name, $materials)
    {
        $this->name = $name;
        $this->materials = $materials;
    }
}