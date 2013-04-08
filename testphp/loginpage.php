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
	if (isset($Username) || isset($Password));
	{
		loginpage();
	}
}

else
{
	echo
	"<form type='sessionex1.php' method='POST'>
	<label>Username: </label><br>
	<input type='text' name='Username'><br>
	<label>Password: <br>
	<input type='text' name='Last_name'></label?<br>
	<label>Login!</label><input type='submit' name='submit' value='login'>
	</form>";
}
?>
