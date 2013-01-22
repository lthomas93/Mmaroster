<html>
<head>
<title> Student Registration!</title>
</head>
<body>

<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if(DB::isError($connection)){
  die("Could not connect to the database: <br />" .DB::errorMessage($connection));
  }
  
//require_once('insert.php');
// got to change this to what file i make my upload function to ^
require_once('loginverification.php');

  if (isset($_POST["Last_name"])){
	$Last_name = $_POST["Last_name"];
  }

  if (isset($_POST["First_name"])){
	$First_name = $_POST["First_name"];
  }

  if (isset($_POST["Age"])){
	$Age = $_POST["Age"];
  }

  if (isset($_POST["Address"])){
	$Address = $_POST["Address"];
  }

  if (isset($_POST["City"])){
	$City = $_POST["City"];
  }

  if (isset($_POST["Zip_code"])){
	$Zip_code = $_POST["Zip_code"];
  }

  if (isset($_POST["Minor"])){
	$Minor = $_POST["Minor"];
  }

  if (isset($_POST["Guardian_id"])){
	$Guardian_id = $_POST["Guardian_id"];
  }
  
  if (isset($_POST["Phone_number"])){
  	$Phone_number = $_POST["Phone_number"];
  }

if (isset($Last_name) && ($First_name) && ($Age) && ($Address) && ($City) && ($State) && ($Zip_code) && ($Minor) && ($Guardian_id) && ($Phone_number)) {
  (($Last_name !=NULL) && ($First_name !=NULL) && ($Age !=NULL) && ($Address !=NULL) && ($City !=NULL) && ($State !=NULL) && ($Zip_code !=NULL) && ($Minor !=NULL) && ($Guardian_id !=NULL) && ($Phone_number !=NULL));
	if (($Last_name !=NULL) && ($First_name !=NULL) && ($Age !=NULL) && ($Address !=NULL) && ($City !=NULL) && ($State !=NULL) && ($Zip_code !=NULL) && ($Minor !=NULL) && ($Guardian_id !=NULL) && ($Phone_number !=NULL)){
//register($Username,$Password,$Last_name,$First_name,$School_name,$Phone_number,$Email);
// got to change this to whatever i call the new insert function ^
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
