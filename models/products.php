<?php

class Product 
{
    public $title;
    public $image;
    public $type;
    public $price;


    public function __constuct($title, $image, $type, $price)
    {
        $this->title = $title;
        $this->image = $image;
        $this->type = $type;
        $this->price = $price;
    }


}