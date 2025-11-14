<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link href="styles.css" rel="stylesheet">
</head>
<body>

    <div class="textsection">
        <h3>Users From All Companies</h3>
        <div class="userssection"> 
            <p><strong>Source:</strong> williamgky.online</p>
            <?php
                curl -H "Accept: application/json" -X GET http://williamgky.online/userlist.php -o -temp.json
                $json = file_get_contents('temp.json'); 
                if ($json === false) {
                    die('Error reading the JSON file');
                }
                $json_data = json_decode($json, true); 
                if ($json_data === null) {
                    die('Error decoding the JSON file');
                }
                echo "<ul>\n";
                $usersSection = $json_data['result']; 
                foreach ($usersSection as $user) {
                    echo "<li>" . $user . "</li>"; 
                }
                echo "</ul>";
            ?>
        </div>
        <div class="userssection"> 
        </div>
        <div class="userssection"> 
        </div>
        <div class="userssection"> 
        </div>
    
    </div>

    
    <footer>
        <p>Ver 2.5.15</p>
    </footer>

    <!-- http://williamgky.online/userlist.php -->
    <!-- https://plb.bfm.mybluehost.me/righttwice/curl.php -->
    <!-- https://seanhtran.com/users.php -->

</body>
</html>