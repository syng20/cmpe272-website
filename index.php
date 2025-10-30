<?php
if (!isset($_COOKIE["first_visit"])) {
  setcookie("first_visit", 1); 
  // most visited 
  // increase, sort by value 
  $visits = ['abh' => 0, 'bc' => 0, 'cbh' => 0, 'hc' => 0, 'lbh' => 0, 'mbh' => 0, 'obh' => 0, 'phbh' => 0, 'prbh' => 0, 'wh' => 0]; 
  $visitsJson = json_encode($visits); 
  setcookie('visits_array', $visitsJson); 
  // most recently visited 
  // set current page to 1, increase all non-zero values 
  // if number of non-zero values > 5, set largest value to 0
  $recently = ['abh' => 0, 'bc' => 0, 'cbh' => 0, 'hc' => 0, 'lbh' => 0, 'mbh' => 0, 'obh' => 0, 'phbh' => 0, 'prbh' => 0, 'wh' => 0]; 
  $recentlyJson = json_encode($recently); 
  setcookie('recently_array', $recentlyJson); 
}
?>
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
        
        
    </header>
    
    <!-- box selection -->
    <main id="homebuttoncontainer">
      <div class="buttonholder">
        <a href="about.php"><button class="button"><h2>About Us</h2></button></a>
      </div>
      <div class="buttonholder">
        <a href="products.php"><button class="button"><h2>Products</h2></button></a>
      </div>
      <div class="buttonholder">
        <a href="news.php"><button class="button"><h2>News</h2></button></a>
      </div>
      <div class="buttonholder">
        <a href="contact.php"><button class="button"><h2>Contact Us</h2></button></a>
      </div>
  </main>

</body>
</html>