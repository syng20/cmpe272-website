<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link href="styles.css" rel="stylesheet"> 
</head>
<body>
    <header> 
        <h1>New Leaf Apiary </h1>
        
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        </nav>
    </header>

    <h2>Products</h2>
    <main>
        <div id="productbuttoncontainer">
            <div class ="imagebuttonholder">
                <a href="products/wildflower_honey.php">
                    <button class="imagebutton_i"><img src="img/wildflower_honey.png"></button>
                    <button class="imagebutton_b"><h3>Wildflower Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/apple_blossom_honey.php">
                    <button class="imagebutton_i"><img src="img/apple_blossom_honey.jpg"></button>
                    <button class="imagebutton_b"><h3>Apple Blossom Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/orange_blossom_honey.php">
                    <button class="imagebutton_i"><img src="img/orange_blossom_honey.png"></button>
                    <button class="imagebutton_b"><h3>Orange Blossom Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/cherry_blossom_honey.php">
                    <button class="imagebutton_i"><img src="img/cherry_blossom_honey.jpg"></button>
                    <button class="imagebutton_b"><h3>Cherry Blossom Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/pear_blossom_honey.php">
                    <button class="imagebutton_i"><img src="img/pear_blossom_honey.jpg"></button>
                    <button class="imagebutton_b"><h3>Pear Blossom Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/peach_blossom_honey.php">
                    <button class="imagebutton_i"><img src="img/peach_blossom_honey.jpg"></button>
                    <button class="imagebutton_b"><h3>Peach Blossom Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/mango_blossom_honey.php">
                    <button class="imagebutton_i"><img src="img/mango_blossom_honey.jpg"></button>
                    <button class="imagebutton_b"><h3>Mango Blossom Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/lychee_blossom_honey.php">
                    <button class="imagebutton_i"><img src="img/lychee_blossom_honey.png"></button>
                    <button class="imagebutton_b"><h3>Lychee Blossom Honey</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/honeycomb.php">
                    <button class="imagebutton_i"><img src="img/honeycomb.jpg"></button>
                    <button class="imagebutton_b"><h3>Honeycomb</h3></button>
                </a>
            </div>
            <div class ="imagebuttonholder">
                <a href="products/beeswax_candles.php">
                    <button class="imagebutton_i"><img src="img/beeswax_candles.jpg"></button>
                    <button class="imagebutton_b"><h3>Beeswax Candles</h3></button>
                </a>
            </div>
        </div>
        <div id="recent_sidebar">
            <p>hi.</p>
            <br>
            <?php
                // $recents = array(); 
                // foreach ($_COOKIE['recent'] as $name => $value) {
                //     if ($value > 0) {
                //         $recents["$name"] = $value; 
                //     }
                // }
                // asort($recents); 
                // foreach ($recents as $name_j => $value_j) {
                //     print "<p>$name_j\n</p>"; 
                // }
                echo "<h3>Most Visited: \n</h3>"; 
                // $v = stripslashes($_COOKIE['visits_array']); 
                // $retrieved = json_decode($v, true); 
                $recents = array(); 
                $retrieved = json_decode($_COOKIE['visits_array'], true); 
                foreach ($retrieved as $name => $value) {
                    if ($value > 0) {
                        array_push($recents, $name); 
                    }
                }
                asort($recents); 
                $listonames = ['abh' => "Apple Blossom Honey", 'bc' => "Beeswax Candles", 'cbh' => "Cherry Blossom Honey", 'hc' => "Honeycomb", 'lbh' => "Lychee Blossom Honey", 'mbh' => "Mango Blossom Honey", 'obh' => "Orange Blossom Honey", 'phbh' => "Peach Blossom Honey", 'prbh' => "Pear Blossom Honey", 'wh' => "Wildflower Honey"]; 
                foreach($recents as $name => $value) {
                    echo "<p>{$listonames[$name]}\n</p>"; 
                }
                // foreach ($retrieved as $name => $value) {
                //     echo "<p>$name is $value\n</p>"; 
                // }
                // echo "<p>Recently Visited: \n</p>"; 
                // // $v = stripslashes($_COOKIE['recently_array']); 
                // // $retrieved = json_decode($v, true); 
                // $retrieved = json_decode($_COOKIE['recently_array'], true); 
                // foreach ($retrieved as $name => $value) {
                //     echo "<p>$name is $value\n</p>"; 
                // }
            ?>
        </div>
  </main>

</body>
</html>