<?php
function register($Username,$Password,$Last_name,$First_name,$School_name,$Phone_number,$Email)
{

	require_once('db_login.php');
	global $db_username, $db_password, $db_host, $db_database;
	require_once('DB.php'); //pears file location.
	$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
	if(DB::isError($connection))
	{
	die("Could not connect to the database:<br />".DB::errorMessage($connection));
	}


	$Username = htmlentities($Username);
	$Password = htmlentities($Password);
	$Last_name = htmlentities($Last_name);
	$First_name = htmlentities($First_name);
	$School_name = htmlentities($School_name);
	$Phone_number = htmlentities($Phone_number);
	$Email = htmlentities($Email);

	if(get_magic_quotes_gpc())
	{
		$Username = stripslashes($Username);
		$Password = stripslashes($Password);
		$Last_name = stripslashes($Last_name);
		$First_name = stripslashes($First_name);
		$School_name = stripslashes($School_name);
		$Phone_number = stripslashes($Phone_number);
		$Email = stripslashes($Email);
	}

	$Username = mysql_real_escape_string($Username);
	$Password = mysql_real_escape_string($Password);
	$Last_name = mysql_real_escape_string($Last_name);
	$First_name = mysql_real_escape_string($First_name);
	$School_name = mysql_real_escape_string($School_name);
	$Phone_number = mysql_real_escape_string($Phone_number);
	$Email = mysql_real_escape_string($Email);

	$md5password=md5($Password);
	$query="INSERT INTO members VALUES (NULL,'$Username','$md5password','$Last_name','$First_name','$School_name','$Phone_number','$Email')";

	$result=$connection->query($query);

	if(DB::isError($result))
	{
		die("Could not query the database: <br />".DB::errorMessage($result));
	}

	echo "Registration complete! Thank you for signing up $Username!";
	$connection->disconnect();
}
?>
