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
                        print("<p>/n username: $_POST[usrn] , password: $_POST[pwd] </p>"); 
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
            print "<h2>Users:</h2>\n";
            $myfile = fopen("admin_users.txt", "r") or die("Unable to open file!");
            while ($line = fgets($myfile)) {
                print "<p>* $line\n</p>";
            }
            // echo fread($myfile,filesize("admin_users.txt"));
            fclose($myfile);
        }
    ?>
    </div>

    
    <footer>
        <p>Ver 2.5.00</p>
    </footer>

</body>
</html>