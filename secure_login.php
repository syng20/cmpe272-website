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
        if (isset($_SERVER["REQUEST_METHOD"])){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ( ($usrn != "admin") || ($pwd != "4dmin_password") ) {
                    print("<p>Incorrect login.<\p>"); 
                }
                else $access_granted = 1; 
            }
        }
    ?>


    <h2>Staff only.</h2>
    <p>Please input your username and password.</p>
    <form action="" method="POST">
        Username: <input type="text" name="usrn"><br>
        Password: <input type="text" name="pwd"><br>
        <input type="submit">
    </form>

    <?php
        if ($access_granted) {
            $myfile = fopen("admin_users.txt", "r") or die("Unable to open file!");
            echo fread($myfile,filesize("cs_associate.txt"));
            fclose($myfile);
        }
    ?>


</body>
</html>