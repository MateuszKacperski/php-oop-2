<?php 

require_once __DIR__ . '/models/products.php';
require_once __DIR__ . '/models/category.php';
require_once __DIR__ . '/models/games.php';
require_once __DIR__ . '/models/food.php';
require_once __DIR__ . '/models/accesories.php';

$categoryCane = new Category('cane','caneIcon');
$categoryGatto = new Category('gatto','gattoIcon');
$categoryUcelli = new Category('ucelli','ucelliIcon');
$categoryPesci = new Category('pesci','pesciIcon');

$foodCane1 = new Food('Royal Canin Mini Adult', 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000');
$foodCane2 = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg');
$foodGatto = new Food('Almo Nature Cat Daily Lattina', 0.5, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg');
$foodPesci = new Food('Mangime per Pesci Guppy in Fiocchi', 0.2, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg');

$accessoriesUcelli = new Accessories('Voliera Wilma in Legno', 1.5, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg');
$accessoriesPesci = new Accessories('Cartucce Filtranti per Filtro EasyCrystal', 0.3, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg');


$giochiCane = new Games('Kong Classic', 'plastic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg');
$giochiGatto = new Games('Topini di peluche Trixie', 'seta', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
    crossorigin="anonymous">
</head>
<body>

</body>
</html>