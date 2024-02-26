<?php

class Food extends Products
{
    public $name;
    public $weight;



    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }
}