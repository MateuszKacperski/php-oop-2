<?php

class Accessories extends Products
{
    public $name;
    public $size;

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }
}