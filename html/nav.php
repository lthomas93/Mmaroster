<?php
if (!isset($_SESSION))
{
        session_start();
}

function nav_menu()
{
	echo ('
		<li><a href="#">Home</a></li></br>
		<li><a href="studentupload.php">Insert Student</a></li></br>
		<li><a href="guardianupload.php">Insert Guardian</a></li></br>
		<li><a href="studentroster.php">Student Roster</a></li></br>
		<li><a href="studentquery.php">Search Students</a></li></br>
		<li><a href="studentdeletion.php">Delete Students</a></li></br> 	
		<li><a href="guardianroster.php">Guardian Roster</a></li></br>
		<li><a href="guardianquery.php">Search Guardians</a></li></br>
		<li><a href="guardiandeletion.php">Delete Guardians</a></li></br>
	      ');
}

function login_nav()
{
	
	if ($_SESSION['loggedin'] != "YES")
	{
		echo ('
			<p align="right"> <a href="login.php"><u>Login!</u></a>
			<a href="registration.php">   <u>Sign Up!</u></a>
		     ');
	}
	
	else
	{
		echo (' <p align="right"> <a href="logout.php"><u>Logout!</u></a> ');
	}	
}
?>
