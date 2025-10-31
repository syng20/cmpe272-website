<?php
    // for most visited 
    $v = stripslashes($_COOKIE['visits_array']); 
    $retrieved = json_decode($v, true); 
    $retrieved['obh']++; 
    setcookie('visits_array', json_encode($retrieved), 0, '/'); 
    // for most recently visited
    $v = stripslashes($_COOKIE['recently_array']); 
    $retrieved = json_decode($v, true); 
    $nz_counter = 0; 
    $largest_n = ""; 
    $largest_v = 0; 
    foreach ($retrieved as $name => $value) {
        if ($value > 0) {
            $retrieved[$name]++; 
            $nz_counter++; 
            if ($value > $largest_v) {
                $largest_n = $name; 
                $largest_v = $value; 
            }
        }
    }
    $retrieved['obh'] = 0; 
    if ($nz_counter > 5) {
        $retrieved[$largest_n] = 0; 
    }
    setcookie('recently_array', json_encode($retrieved), 0, '/'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link href="../styles.css" rel="stylesheet"> 
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
