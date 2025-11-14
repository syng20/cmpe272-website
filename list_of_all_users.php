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
            <p><strong>Source:</strong> syng20.me</p>
            <?php
                $json = file_get_contents('admin_users.json'); 
                if ($json === false) {
                    die('Error reading the JSON file');
                }
                $json_data = json_decode($json, true); 
                if ($json_data === null) {
                    die('Error decoding the JSON file');
                }
                echo "<ul>\n";
                $usersSection = $json_data['users']; 
                foreach ($usersSection as $user) {
                    echo "<li>" . $user['name'] . "</li>"; 
                    
                }
                echo "</ul>";
            ?>
        </div>
        <div class="userssection"> 
            <p><strong>Source:</strong> williamgky.online</p>
            <?php
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL, "http://williamgky.online/userlist.php");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
                $response = curl_exec($ch); 
                if (curl_errno($ch)) {
                    die('Error reading the JSON file');
                }
                curl_close($ch);
                $json_data = json_decode($response, true); 
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
            <p><strong>Source:</strong> plb.bfm.mybluehost.me</p>
            <?php
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL, "https://plb.bfm.mybluehost.me/righttwice/curl.php");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
                $response = curl_exec($ch); 
                if (curl_errno($ch)) {
                    die('Error reading the JSON file');
                }
                curl_close($ch);
                $json_data = json_decode($response, true); 
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
            <p><strong>Source:</strong> seanhtran.com</p>
            <?php
                $ch = curl_init(); 
                curl_setopt($ch, CURLOPT_URL, "https://seanhtran.com/users.php");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
                $response = curl_exec($ch); 
                if (curl_errno($ch)) {
                    die('Error reading the JSON file');
                }
                curl_close($ch);
                $json_data = json_decode($response, true); 
                if ($json_data === null) {
                    die('Error decoding the JSON file');
                }
                echo "<ul>\n";
                $usersSection = $json_data['data']; 
                foreach ($usersSection as $user) {
                    echo "<li>" . $user['firstName'] . " " . $user['lastName'] . "</li>"; 
                }
                echo "</ul>";
            ?>
        </div>
        
    
    </div>

    
    <footer>
        <p>Ver 2.5.17</p>
    </footer>

    <!-- http://williamgky.online/userlist.php -->
    <!-- https://plb.bfm.mybluehost.me/righttwice/curl.php -->
    <!-- https://seanhtran.com/users.php -->

</body>
</html>