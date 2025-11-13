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
    <?php
        
            echo "<h3>Users From All Companies</h3>"; 
            $json = file_get_contents('admin_users.json'); 

            if ($json === false) {
                die('Error reading the JSON file');
            }

            $json_data = json_decode($json, true); 

            if ($json_data === null) {
                die('Error decoding the JSON file');
            }

            echo "<pre>";
            $usersSection = $json_data['users']; 
            foreach ($usersSection as $user) {
                echo "* " . $user['name'] . "\n"; 
            }
            echo "</pre>";

        }
    ?>
    </div>

    
    <footer>
        <p>Ver 2.5.08</p>
    </footer>

</body>
</html>