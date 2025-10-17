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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        </nav>
    </header>

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

    

    <footer id="atbottom">
        Staff Log In
    </footer>

</body>
</html>