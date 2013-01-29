<?php
function register_student($Last_name,$First_name,$Age,$Address,$City,$State,$Zip_code,$Minor,$Guardian_id,$Phone_number){

require_once('db_login.php');
global $db_username, $db_password, $db_host, $db_database;
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if(DB::isError($connection)){
  die("Could not connect to the database:<br />".DB::errorMessage($connection));
  }

$Last_name = htmlentities($Last_name);
$First_name = htmlentities($First_name);
$Age = htmlentities($Age);
$Address = htmlentities($Address);
$City = htmlentities($City);
$State = htmlentities($State);
$Zip_code = htmlentities($Zip_code);
$Minor = htmlentities($Minor);
$Guardian_id = htmlentities($Guardian_id);
$Phone_number = htmlentites($Phone_number);

  if(get_magic_quotes_gpc()){
$Last_name = stripslashes($Last_name);
$First_name = stripslashes($First_name);
$Age = stripslashes($Age);
$Address = stripslashes($Address);
$City = stripslashes($City);
$State = stripslashes($State);
$Zip_code = stripslashes($Zip_code);
$Minor = stripslashes($Minor);
$Guardian_id = stripslashes($Guardian_id);
$Phone_number = stripslashes($Phone_number)
  }

$Last_name = mysql_real_escape_string($Last_name);
$First_name = mysql_real_escape_string($First_name);
$Age = mysql_real_escape_string($Age);
$Address = mysql_real_escape_string($Address);
$City = mysql_real_escape_string($City);
$State = mysql_real_escape_string($State);
$Zip_code = mysql_real_escape_string($Zip_code);
$Minor = mysql_real_escape_string($Minor);
$Guardian_id = mysql_real_escape_strip($Guardian_id);
$Phone_number = mysql_real_escape_strip($Phone_number);

$query="INSERT INTO student_roster VALUES (NULL,'$Last_name','$First_name','$Age','$Address','$City','$State','$Zip_code','$Minor','$Guardian_id','$Phone_number')";
$result=$connection->query($query);

  if(DB::isError($result)){
  die("Could not query the database: <br />".DB::errorMessage($result));
  }

echo "$Last_name, $First_name was added to the student roster!";
$connection->disconnect();
}
?>
