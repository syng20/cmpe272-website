<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link href="styles.css" rel="stylesheet">
   <script src="code.js" defer></script>
</head>
<body>
    <header> 
        <h1>Sinclair Apiary </h1>
        
        <nav>
        <ul>
            <li><a href="about.html">About Us</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="services.html">News</a></li>
            <li><a href="contact.html">Contact Us</a></li>
        </ul>
        </nav>
    </header>
    
    
    
    <h2>About Us</h2>
    <p>Based in the outskirts of Shellicity, Sinclair Apiary has served as family-run business and tourist attraction for three generations. We pride ourselves on our ethical treatment of our bees and crops. </p>

    <h2>Products</h2>
    <p>We are in the process of redoing our inventory. More information to come soon! </p>

    <h2>News</h2>
    <p>Sinclair Apiary recently celebrated our 80th anniversary! </p>

    <h2>Contacts</h2>
    <p>Sales: </p>
    <?php
        $myfile = fopen("sales_associate.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("sales_associate.txt"));
        fclose($myfile);
    ?> 
    <p>Bookings: </p>
    <?php
        $myfile = fopen("bookings_associate.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("bookings_associate.txt"));
        fclose($myfile);
    ?> 
    <p>Customer Service: </p>
    <?php
        $myfile = fopen("cs_associate.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("cs_associate.txt"));
        fclose($myfile);
    ?> 
    

</body>
</html>