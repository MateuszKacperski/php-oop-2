<?php

include_once __DIR__ . '/products.php';

class Food extends Products
{
    public $name;
    public $image;
    public $weight;



    public function __construct($name, $weight, $image)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->image = $image;
    }
}