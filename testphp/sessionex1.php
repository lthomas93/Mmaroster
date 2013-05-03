<html>
<?php
session_start();
function loginpage($Username,$md5password)
{
	require_once('dblogin.php');
	require_once('DB.php');


	global $db_username, $db_password, $db_host, $db_database;
	$connection=DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
	if (DB::isError($connection))
	{
		die("Could not connect to the database: <br />". DB::errorMessage($connection));
	}


	if (isset($_SESSION['loggedin']))
	{
		die("You already logged in!");
	}


	if (isset($_POST['submit']))
	{
		$Username = mysql_real_escape_string($_POST['Username']);
		$Password = mysql_real_escape_string($_POST['Password']);
		$md5password=md5($Password);
		$query = "SELECT * FROM member WHERE Username='$Username' AND Password='$md5password'";
		$result=$connection->query($query);
		if (DB::isError($result))
		{
			die ("Could not query the database. <br />" .$query." ".DB::errorMessage($result));
		}
		$verify = $result->numRows();
		if ($verify == "1")
		{
			echo "Password and username was correct!";
			$_SESSION['loggedin'] = "YES";
			$_SESSION['name'] = "$Username";
			header("Location:/lthomas/Mmaroster/html/guardianupload.php");
		}
		else
		{
			die("Password or username was incorrect!");	
		}
	}
}
?>
</html>
