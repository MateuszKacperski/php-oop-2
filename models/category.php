<?php

class Category 
{
    public $species;
    public $icon;


    public function __construct($species, $icon)
    {
        $this->species = $species;
        $this->icon = $icon;
    }
}