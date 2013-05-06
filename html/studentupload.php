<html>
<head>
<title> Student Registration!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="top">
<h1>Student Upload!</h1>
<?php
session_start();
require_once('nav.php');
login_nav();
?>
</div>

<div id="left">
<?php
nav_menu();
?>
</div>

<div id="right">



<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if(DB::isError($connection))
{
	die("Could not connect to the database: <br />" .DB::errorMessage($connection));
}

if ($_SESSION['loggedin'] != "YES")
{
	echo "You are not logged in!";
	exit;
}  
require_once('insert1.php');

require_once('loginverification.php');

if (isset($_POST["Last_name"]))
{
	$Last_name = $_POST["Last_name"];
}

if (isset($_POST["First_name"]))
{
	$First_name = $_POST["First_name"];
}

if (isset($_POST["Age"]))
{
	$Age = $_POST["Age"];
}

if (isset($_POST["Address"]))
{
	$Address = $_POST["Address"];
}

if (isset($_POST["City"]))
{
	$City = $_POST["City"];
}

if (isset($_POST["State"]))
{
	$State = $_POST["State"];
}

if (isset($_POST["Zip_code"]))
{
	$Zip_code = $_POST["Zip_code"];
}

if (isset($_POST["Phone_number"]))
{
	$Phone_number = $_POST["Phone_number"];
}

if (isset($_POST["Minor"]))
{
	$Minor = $_POST["Minor"];
}

if (isset($_POST["Guardian_id"]))
{
	$Guardian_id = $_POST["Guardian_id"];
}
  

if (isset($Last_name) && ($First_name) && ($Age) && ($Address) && ($City) && ($State) && ($Zip_code) && ($Phone_number) && ($Minor) && ($Guardian_id))
{
	(($Last_name !=NULL) && ($First_name !=NULL) && ($Age !=NULL) && ($Address !=NULL) && ($City !=NULL) && ($State !=NULL) && ($Zip_code !=NULL) && ($Phone_number !=NULL) && ($Minor !=NULL) && ($Guardian_id !=NULL));
	if (($Last_name !=NULL) && ($First_name !=NULL) && ($Age !=NULL) && ($Address !=NULL) && ($City !=NULL) && ($State !=NULL) && ($Zip_code !=NULL) && ($Phone_number !=NULL) && ($Minor !=NULL) && ($Guardian_id !=NULL))
	{
		register_student($Last_name,$First_name,$Age,$Address,$City,$State,$Zip_code,$Phone_number,$Minor,$Guardian_id);
	} 
} // Rest left alone for due to css code.
else{
  echo '
<pre><h1>Upload Student!</h1>
<form action="'.$_SERVER["PHP_SELF"].'" method="POST">
<label> Last Name:    <input type="text" name="Last_name" /> </label> </br>
<label> First Name:   <input type="text" name="First_name" /> </label> </br>
<label> Age:          <input type="text" name="Age" /> </label> </br>
<label> Address:      <input type="text" name="Address" /> </label> </br>
<label> City:         <input type="text" name="City" /> </label> </br>
<label> State:        <input type="text" name="State" /> </label> </br>
<label> Zip Code:     <input type="text" name="Zip_code" /> </label> </br>
<label> Phone Number: <input type="text" name="Phone_number" /></label></br>
<label> Minor:        <input type="text" name="Minor" /> </label></br>
<label> Guardian Id:  <input type="text" name="Guardian_id" /><label></br>
<input type="submit" value="Upload Student!">
</form>';
}
?>
</pre>
</div>
</body>
</html>

