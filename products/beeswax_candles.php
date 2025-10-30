<?php
    // for most visited 
    $bc = $_COOKIE["visits[bc]"]; 
    $bc++; 
    setcookie("visits[bc]", $bc); 
    // for most recently visited
    $bc = $_COOKIE["recent[bc]"]; 
    $bc++; 
    setcookie("recent[bc]", $bc); 
    $nz_counter = 0; 
    $largest_n = ""; 
    $largest_v = 0; 
    foreach ($_COOKIE['recent'] as $name => $value) {
        if ($value > 0) {
            $value++; 
            $nz_counter++; 
            if ($value > $largest_v) {
                $largest_n = $name; 
            }
        }
    }
    if ($nz_counter > 5) {
        setcookie("recent[$largest]", 0); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link href="../styles.css" rel="stylesheet">
   <script src="code.js" defer></script>
</head>
<body>
    <header> 
        <h1>New Leaf Apiary </h1>
        
        <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../about.php">About Us</a></li>
            <li><a href="../products.php">Products</a></li>
            <li><a href="../news.php">News</a></li>
            <li><a href="../contact.php">Contact Us</a></li>
        </ul>
        </nav>
    </header>

    <h2>Beeswax Candles</h2>

    <main class="productsection">
        <div class="productsection_i">
            <img src="../img/beeswax_candles.jpg">
        </div>
        <div class="productsection_t"> 
            <p><strong>Contents:</strong>
            A set of three candles made from beeswax.
            <br>
            <strong>Price:</strong>
            $11.00 per pack of three candles</p>
        </div>
    </main>
    

</body>
</html>
