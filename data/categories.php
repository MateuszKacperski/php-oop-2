<?php

require_once __DIR__ . '/../models/category.php';

$categories = [
    'dog' => new Category('Cani', 'fa-solid fa-dog'),
    'cat' => new Category('Cat', 'fa-solid fa-cat'),
    'fish' => new Category('Fish', 'fa-solid fa-fish'),
    'bird' => new Category('Bird', 'fa-solid fa-dove'),
]