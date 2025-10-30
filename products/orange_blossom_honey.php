<?php
    // for most visited 
    $obh = $_COOKIE["visits[obh]"]; 
    $obh++; 
    setcookie("visits[obh]", $obh); 
    // for most recently visited
    $obh = $_COOKIE["recent[obh]"]; 
    $obh++; 
    setcookie("recent[obh]", $obh); 
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

    <h2>Orange Blossom Honey</h2>

    <main class="productsection">
        <div class="productsection_i">
            <img src="../img/orange_blossom_honey.png">
        </div>
        <div class="productsection_t"> 
            <p><strong>Contents:</strong>
            A jar of orange blossom honey. Each jar is 12 oz.
            <br>
            <strong>Price:</strong>
            $15.00 per jar</p>
        </div>
    </main>
    

</body>
</html>
