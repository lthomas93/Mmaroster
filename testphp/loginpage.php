<?php
require_once('dblogin.php');
require_once('DB.php');
require_once('sessionex1.php');

$connection=DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection))
{
	die("Could not connect to the database: <br />". DB::errorMessage($connection));
}


if (isset($_POST["Last_name"]))
{
	$Last_name = $_POST["Last_name"];
}

if (isset($_POST["First_name"]))
{
	$First_name = $_POST["First_name"];
}

if (isset($Last_name) && isset($First_name))
{
	(($Last_name !=NULL) && ($First_name != NULL));
	
	if (($Last_name !=NULL) && ($First_name != NULL))
	{
		loginpage($Last_name,$First_name);
	}
}

else
{

//	echo '<form type="'.$_SERVER["PHP_SELF"].'" method="POST">';
	echo '<form type="localhost/lthomas/Mmaroster/testphp/sessionex1.php" method="POST">';
	echo '<label>Last name: </label><br>';
	echo '<input type="text" name="Last_name"><br>';
	echo '<label>First Name: <br>';
	echo '<input type="text" name="First_name"></label?<br>';
	echo '<label>Login!</label><input type="submit" name="submit" value="login">';
	echo '</form>';
}
?>
