<?php
if (!isset($_COOKIE["first_visit"])) {
  setcookie("first_visit", 1); 
  // most visited 
  // increase, sort by value 
  setcookie("visits[abh]", 0); 
  setcookie("visits[bc]", 0); 
  setcookie("visits[cbh]", 0); 
  setcookie("visits[hc]", 0); 
  setcookie("visits[lbh]", 0); 
  setcookie("visits[mbh]", 0); 
  setcookie("visits[obh]", 0); 
  setcookie("visits[phbh]", 0); 
  setcookie("visits[prbh]", 0); 
  setcookie("visits[wh]", 0); 
  // most recently visited 
  // set current page to 1, increase all non-zero values 
  // if number of non-zero values > 5, set largest value to 0
  setcookie("recent[abh]", 0); 
  setcookie("recent[bc]", 0); 
  setcookie("recent[cbh]", 0); 
  setcookie("recent[hc]", 0); 
  setcookie("recent[lbh]", 0); 
  setcookie("recent[mbh]", 0); 
  setcookie("recent[obh]", 0); 
  setcookie("recent[phbh]", 0); 
  setcookie("recent[prbh]", 0); 
  setcookie("recent[wh]", 0); 
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