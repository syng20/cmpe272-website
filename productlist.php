<?php
$jsonData = array ( 
    "status" => "success", 
    "count" => 10, 
    "products" => array (
        array(
            "name" => "Wildflower Honey", 
            "description" => "A jar of wildflower honey. Each jar is 12 oz.", 
            "img"=> "https://syng20.me/img/wildflower_honey.png",
            "price"=> "15.00"
        ), 
        array(
            "name" => "Apple Blossom Honey",
            "description" => "A jar of apple blossom honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/apple_blossom_honey.jpg",
            "price" => "15.00"
        ),
        array(
            "name" => "Orange Blossom Honey",
            "description" => "A jar of orange blossom honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/orange_blossom_honey.png",
            "price" => "15.00"
        ),
        array(
            "name" => "Cherry Blossom Honey",
            "description" => "A jar of cherry blossom honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/cherry_blossom_honey.jpg",
            "price" => "15.00"
        ),
        array(
            "name" => "Pear Blossom Honey",
            "description" => "A jar of pear blossom honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/pear_blossom_honey.jpg",
            "price" => "15.00"
        ),
        array(
            "name" => "Peach Blossom Honey",
            "description" => "A jar of peach blossom honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/peach_blossom_honey.jpg",
            "price" => "15.00"
        ),
        array(
            "name" => "Mango Blossom Honey",
            "description" => "A jar of mango blossom honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/mango_blossom_honey.jpg",
            "price" => "15.00"
        ),
        array(
            "name" => "Lychee Blossom Honey",
            "description" => "A jar of lychee blossom honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/lychee_blossom_honey.png",
            "price" => "15.00"
        ),
        array(
            "name" => "Honeycomb",
            "description" => "A jar of honeycomb preserved within wildflower honey. Each jar is 12 oz.", 
            "img" => "https://syng20.me/img/honeycomb.jpg",
            "price" => "15.00"
        ),
        array(
            "name" => "Beeswax Candles",
            "description" => "A set of three candles made from beeswax. The price is for a pack of three.", 
            "img" => "https://syng20.me/img/beeswax_candles.jpg",
            "price" => "11.00"
        )
    )
);
header('Content-Type: application/json');
$json_pretty = json_encode($jsonData, JSON_PRETTY_PRINT);
echo $json_pretty;
?>
