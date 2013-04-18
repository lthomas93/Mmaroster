<html>
<?php
session_start();
//function loginpage()
//{
	require_once('dblogin.php');
	require_once('DB.php');


//	global $db_username, $db_password, $db_host, $db_database;
	$connection=DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
	if (DB::isError($connection))
	{
		die("Could not connect to the database: <br />". DB::errorMessage($connection));
	}


	//if (isset($_SESSION['loggedin']))
	//{
	//	die("You already logged in!");
	//}


	if (isset($_POST['submit']))
	{
	//	$Username = mysql_real_escape_string($_POST['Username']);
	//	$Password = mysql_real_escape_string($_POST['Password']);
	//	$md5password=md5($Password);
	//$Last_name=NULL;
	//$First_name=NULL;
	$query = "SELECT * FROM student_roster  WHERE Last_name='$Last_name' AND First_name='$First_name'";//changed password to last name for test purposes
		$result=$connection->query($query);
		if (DB::isError($result))
		{
			die ("Could not query the database. <br />" .$query." ".DB::errorMessage($result));
		}
		echo('<table border="1">');
		echo("<tr><th>Instructor Id</th><th>Username</th><th>Password</th><th>Last name</th><th>First name</th><th>School name</th><th>Phone number</th><th>Email</tr></th>");
		while ($result_row = $result->fetchrow())
		{
			echo "<tr><td>";
     			echo $result_row[0] . '</td><td>';
     			echo $result_row[1] . '</td><td>';
     			echo $result_row[2] . '</td><td>';
     			echo $result_row[3] . '</td><td>';
     			echo $result_row[4] . '</td><td>';
        		echo $result_row[5] . '</td><td>';
        		echo $result_row[6] . '</td><td>';
        		echo $result_row[7] . '</td><td>';
        		echo $result_row[8] . '</td></tr>';
		}
		$verify = $result->numRows();
		echo "$verify";
		if ($verify == "1")
		{
			echo "Password or username was incorrect!";
	//		die("Password or username was incorrect!");
		}
		else
		{
			echo "Password was correct";
	//		$_SESSION['loggedin'] = "YES";
	//		$_SESSION['name'] = $Username;
			header("http://localhost/lthomas/html/guardianupload.php");
		}
	}


//	else
//	{
		echo '<form type="'.$_SERVER["PHP_SELF"].'" method=\"POST\">';
		echo '<label>Last Name: </label><br>';
		echo '<input type="text" name="Last_name"><br>';
		echo '<label>First Name: <br>';
		echo '<input type="text" name="First_name"></label><br>';
		echo '<label>Login!</label><input type="submit" name=\"submit\" value=\"login\"></form>';    

//	}
//}
?>
</html>
