<?php


require_once __DIR__ . '/categories.php';
require_once __DIR__ . '/../models/food.php';
require_once __DIR__ . '/../models/games.php';
require_once __DIR__ . '/../models/accessories.php';


$products = [
    new Food('Royal Canin Mini Adult', 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', $categories['dog']),
    new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $categories['dog']),
    new Food('Almo Nature Cat Daily Lattina', 0.5, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', $categories['cat']),
    new Food('Mangime per Pesci Guppy in Fiocchi', 0.2, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $categories['cat']),
    new Accessories('Voliera Wilma in Legno', 1.5, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg'),
    new Accessories('Cartucce Filtranti per Filtro EasyCrystal', 0.3, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg'),
    new Games('Kong Classic', 'plastic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg'),
    new Games('Topini di peluche Trixie', 'seta', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg')

]

