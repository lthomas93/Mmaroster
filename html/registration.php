<html>
<head>
<title> Member Registration!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="top">
<h1>User Registration</h1>
</div>

<div id="left">
<?php
if (!isset($_SESSION))
{
        session_start();
}

require_once('nav.php');
nav_menu();
?>
</div>

<div id="right">
<?php
require_once('db_login.php');
require_once('DB.php');
require_once('insert.php');
require_once('loginverification.php');


$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
	if(DB::isError($connection))
	{
  		die("Could not connect to the database: <br />" .DB::errorMessage($connection));
  	}


if (isset($_POST["Username"]) && ($_POST["Password"]) && ($_POST["Last_name"]) && ($_POST["First_name"]) && ($_POST["School_name"]) && ($_POST["Phone_number"]) && ($_POST["Email"]))
{
	$Username = $_POST["Username"];
	$Password = $_POST["Password"];
	$Last_name = $_POST["Last_name"];
	$First_name = $_POST["First_name"];
	$School_name=$_POST["School_name"];
	$Phone_number=$_POST["Phone_number"];
	$Email=$_POST["Email"];

	$_SESSION['username']=$Username;
	$_SESSION['password']=$Password;
	$_SESSION['last_name']=$Last_name;
	$_SESSION['first_name']=$First_name;
	$_SESSION['school_name']=$School_name;
	$_SESSION['phone_number']=$Phone_number;
	$_SESSION['email']=$Email;

	verification_username($Username);
	verification_password($Password);
       	verification_lastname($Last_name);
	verification_firstname($First_name);
	verification_schoolname($School_name);
	verification_phonenumber($Phone_number);
	verification_email($Email);

	register($Username,$Password,$Last_name,$First_name,$School_name,$Phone_number,$Email); //The insert function
}

//Left alone cause of css
else
{
echo '
<pre><h1>Please register!</h1>
<form action="'.$_SERVER["PHP_SELF"].'" method="POST">
<label> Username:     <input type="text" name="Username" /> </label> </br>
<label> Password:     <input type="text" name="Password" /> </label> </br>
<label> Last Name:    <input type="text" name="Last_name" /> </label> </br>
<label> First Name:   <input type="text" name="First_name" /> </label> </br>
<label> School Name:  <input type="text" name="School_name" /> </label> </br>
<label> Phone Number: <input type="text" name="Phone_number" /> </label> </br>
<label> Email:        <input type="text" name="Email" /> </label> </br>
<input type="submit" value="Complete Registration!">
</form>';
}
?>

</pre>
</div>
</body>
</html>
