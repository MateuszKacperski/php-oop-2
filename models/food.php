<?php

include_once __DIR__ . '/products.php';

class Food extends Products
{
    public $name;
    public $weight;



    public function __constuct($title, $image, $type, $price, Category $category, $name, $weight)
    {
        parent::__constuct($title, $type, $price, $category);

        $this->name = $name;
        $this->weight = $weight;
    }
}