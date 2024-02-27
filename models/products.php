<?php

require_once __DIR__ . '/category.php';

class Product 
{
    public $title;
    public $image;
    public $type;
    public $price;
    public $category;


    public function __constuct($title, $image, $type, $price, Category $category)
    {
        $this->title = $title;
        $this->image = $image;
        $this->type = $type;
        $this->price = $price;
    }


}