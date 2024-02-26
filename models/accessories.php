<?php

include_once __DIR__ . '/products.php';

class Accessories extends Products
{
    public $name;
    public $size;
    public $image;

    public function __construct($name, $size, $image)
    {
        $this->name = $name;
        $this->size = $size;
        $this->image = $image;
    }
}