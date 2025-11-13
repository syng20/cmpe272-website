<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link href="styles.css" rel="stylesheet">
</head>
<body>

    <?php
        $access_granted = 0; 
        $usrn = $pwd = "";

        if (isset($_SERVER["REQUEST_METHOD"])){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ( !(empty($_POST["usrn"])) && !(empty($_POST["pwd"])) ) {
                    if ( ($_POST["usrn"] != "admin") || ($_POST["pwd"] != "4dmin_password") ) {
                        print("<p>Incorrect login.</p>"); 
                        print("<p>username: $_POST[usrn] , password: $_POST[pwd] </p>"); 
                    }
                    else $access_granted = 1; 
                } 
                else print ("<p>Please make sure all fields are filled.</p>"); 
            }
        }
    ?>


    <h2>Staff only.</h2>
    <p>Please input your username and password.</p>
    <form action="" method="POST">
        Username: <input type="text" name="usrn"><br>
        Password: <input type="password" name="pwd"><br>
        <input type="submit">
    </form>

    <div class="textsection">
    <?php
        if ($access_granted) {
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
        <p>Ver 2.5.07</p>
    </footer>

</body>
</html>