<html>
<head>
<title> Member Registration!</title>
</head>
<body>

<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if(DB::isError($connection)){
  die("Could not connect to the database: <br />" .DB::errorMessage($connection));
  }

require_once('insert.php');
require_once('loginverification.php');

//  if (isset($_GET["Instructor_id"])){
//	$Instructor_id = $_GET["Instructor_id"];
 //}

  if (isset($_POST["Username"])){
	$Username = $_POST["Username"];
	  verification_username($Username);
  }

  if (isset($_POST["Password"])){
	$Password = $_POST["Password"];
		verification_password($Password);
  }

  if (isset($_POST["Last_name"])){
	$Last_name = $_POST["Last_name"];
	  verification_lastname($Last_name);
  }

  if (isset($_POST["First_name"])){
	$First_name = $_POST["First_name"];
	  verification_firstname($First_name);
  }

  if (isset($_POST["School_name"])){
	$School_name = $_POST["School_name"];
	  verification_schoolname($School_name);
  }

  if (isset($_POST["Phone_number"])){
	$Phone_number = $_POST["Phone_number"];
	  verification_phonenumber($Phone_number);
  }

  if (isset($_POST["Email"])){
	$Email = $_POST["Email"];
	  verification_email($Email);
  }

if (isset($Username) && ($Password) && ($Last_name) && ($First_name) && ($School_name) && ($Phone_number) && ($Email)) {
  (($Username !=NULL) && ($Password !=NULL) && ($Last_name !=NULL) && ($First_name!=NULL) && ($School_name !=NULL) && ($Phone_number !=NULL) && ($Email !=NULL));
	if (($Username !=NULL) && ($Password !=NULL) && ($Last_name !=NULL) && ($First_name !=NULL) && ($School_name !=NULL) && ($Phone_number != NULL) && ($Email !=NULL)){
              register($Username,$Password,$Last_name,$First_name,$School_name,$Phone_number,$Email);
            }
}
else{
  echo '
	<h1>Please register!</h1>
	<form action="'.$_SERVER["PHP_SELF"].'" method="POST">
	<label> Username: <input type="text" name="Username" /> </label> </br>
	<label> Password: <input type="text" name="Password" /> </label> </br>
	<label> Last Name: <input type="text" name="Last_name" /> </label> </br>
	<label> First Name: <input type="text" name="First_name" /> </label> </br>
	<label> School Name: <input type="text" name="School_name" /> </label> </br>
	<label> Phone Number: <input type="text" name="Phone_number" /> </label> </br>
	<label> Email: <input type="text" name="Email" /> </label> </br>
	<input type="submit" value="Complete Registration!">
	</form>';
}
?>
