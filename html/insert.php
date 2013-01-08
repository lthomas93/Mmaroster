<?php
require_once('db_login.php');
requice_once('DB.php'); //pears file location.
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if(DB::isError($connection)){
  die("Could not connect to the database:<br />".DB:errorMessage($connection));
  }

function register($Instructor_id, $Username, $Password, $Last_name, $First_name, $School_name, $Phone_number, $Email){

$Instructor_id = htmlentities($Instructor_id);
$Username = htmlentities($Username);
$Password = htmlentities($Password);
$Last_name = htmlentities($Last_name);
$First_name = htmlentities($First_name);
$School_name = htmlentities($School_name);
$Phone_number = htmlentities($Phone_number);
$Email = htmlentities($Email);

  if(get_magic_quotes_gpc()){
	$Instructor_id = stripslashes($Instructor_id);
	$Username = stripslashes($Username);
	$Password = stripslashes($Password);
	$Last_name = stripslashes($Last_name);
	$First_name = stripslashes($First_name);
	$School_name = stripslashes($School_name);
	$Phone_number = stripslashes($Phone_number);
	$Email = stripslashes($Email);
  }

$Instructor_id=mysql_real_escape_string($Instructor_id);
$Username = mysql_real_escape_string($Username);
$Password = mysql_real_escape_string($Password);
$Last_name = mysql_real_escape_string($Last_name);
$First_name = mysql_real_escape_string($First_name);
$School_name = mysql_real_escape_string($School_name);
$Phone_number = mysql_real_escape_string($Phone_number);
$Email = mysql_real_escape_string($Email);

$query="INSERT INTO members(NULL,'$Username','$md5($Password)','$Last_name','$First_name','$School_name','$Phone_number','$Email')";
$result = $connection -> query($query);
  if(DB::isError($result)){
  die("Could not query the database: <br />"DB:errorMessage($result))'
  }

$connection -> disconnect();
