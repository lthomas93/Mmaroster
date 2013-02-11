<?php
function register_guardian($Guardian_id,$Last_name,$First_name,$Age,$Address,$City,$State,$Zip_code,$Phone_number){

require_once('db_login.php');
global $db_username, $db_password, $db_host, $db_database;
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if(DB::isError($connection)){
  die("Could not connect to the database:<br />".DB::errorMessage($connection));
  }

$Guardian_id = htmlentities($Guardian_id);
$Last_name = htmlentities($Last_name);
$First_name = htmlentities($First_name);
$Age = htmlentities($Age);
$Address = htmlentities($Address);
$City = htmlentities($City);
$State = htmlentities($State);
$Zip_code = htmlentities($Zip_code);
$Phone_number = htmlentities($Phone_number);

  if(get_magic_quotes_gpc()){

$Guardian_id = stripslashes($Guardian_id);
$Last_name = stripslashes($Last_name);
$First_name = stripslashes($First_name);
$Age = stripslashes($Age);
$Address = stripslashes($Address);
$City = stripslashes($City);
$State = stripslashes($State);
$Zip_code = stripslashes($Zip_code);
$Phone_number = stripslashes($Phone_number);
  }

$Guardian_id = mysql_real_escape_string($Guardian_id);
$Last_name = mysql_real_escape_string($Last_name);
$First_name = mysql_real_escape_string($First_name);
$Age = mysql_real_escape_string($Age);
$Address = mysql_real_escape_string($Address);
$City = mysql_real_escape_string($City);
$State = mysql_real_escape_string($State);
$Zip_code = mysql_real_escape_string($Zip_code);
$Phone_number = mysql_real_escape_string($Phone_number);

$query="INSERT INTO guardian_roster VALUES ('$Guardian_id','$Last_name','$First_name','$Age','$Address','$City','$State','$Zip_code','$Phone_number')";
$result=$connection->query($query);

  if(DB::isError($result)){
  die("Could not query the database: <br />".DB::errorMessage($result));
  }

echo "$Last_name, $First_name was added to the guardian roster!";
$connection->disconnect();
}
?>
