<?php
require_once('dblogin.php');
require_once('DB.php');
require_once('sessionex1.php');

$connection=DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection))
{
	die("Could not connect to the database: <br />". DB::errorMessage($connection));
}


if (isset($_POST['submit']))
{
	if (isset($Last_name) || isset($First_name));
	{
		loginpage();
	}
}

else
{
	echo
	"<form type='sessionex1.php' method='POST'>
	<label>Last name: </label><br>
	<input type='text' name='Last_name'><br>
	<label>First Name: <br>
	<input type='text' name='First_name'></label?<br>
	<label>Login!</label><input type='submit' name='submit' value='login'>
	</form>";
}
?>
