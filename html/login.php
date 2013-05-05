<?php
require_once('db_login.php');
require_once('DB.php');
require_once('sessionex1.php');

$connection=DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection))
{
        die("Could not connect to the database: <br />". DB::errorMessage($connection));
}


if (isset($_POST["Username"]))
{
        $Username = $_POST["Username"];
}

if (isset($_POST["Password"]))
{
        $Password = $_POST["Password"];
}

if (isset($Username) && isset($Password))
{
        (($Username !=NULL) && ($Password != NULL));

        if (($Username !=NULL) && ($Password != NULL))
        {
                loginpage($Username,$Password);
        }
}

else
{

        echo '<form type="'.$_SERVER["PHP_SELF"].'" method="POST">';
        echo '<form type="localhost/lthomas/Mmaroster/testphp/sessionex1.php" method="POST">';
        echo '<label>Username: </label><br>';
        echo '<input type="text" name="Username"><br>';
        echo '<label>Password: <br>';
        echo '<input type="text" name="Password"></label?<br>';
        echo '<label>Login!</label><input type="submit" name="submit" value="login">';
        echo '</form>';
}
?>

