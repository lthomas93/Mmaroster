<?php
function query_db($Guardian_id){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $Guardian_id = stripslashes($Guardian_id);
  }

  $Guardian_id = htmlentities($Guardian_id);
  $Guardian_id = mysql_real_escape_string($Guardian_id);
  $Guardian_id = $_POST['Guardian_id'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.Guardian_id LIKE '%$Guardian_id%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>


<?php
function query_db1($Last_name){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $Last_name = stripslashes($Last_name);
  }

  $Last_name = htmlentities($Last_name);
  $Last_name = mysql_real_escape_string($Last_name);
  $Last_name = $_POST['Last_name'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.Last_name LIKE '%$Last_name%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
?>


<?php
function query_db2($First_name){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $First_name = stripslashes($First_name);
  }

  $First_name = htmlentities($First_name);
  $First_name = mysql_real_escape_string($First_name);
  $First_name = $_POST['First_name'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.First_name LIKE '%$First_name%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>


<?php
function query_db3($Age){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $Age = stripslashes($Age);
  }

  $Age = htmlentities($Age);
  $Age = mysql_real_escape_string($Age);
  $Age = $_POST['Age'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.Age LIKE '%$Age%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>


<?php
function query_db4($Address){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $Address = stripslashes($Address);
  }

  $Address = htmlentities($Address);
  $Address = mysql_real_escape_string($Address);
  $Address = $_POST['Address'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.Address LIKE '%$Address%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>


<?php
function query_db5($City){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $City = stripslashes($City);
  }

  $City = htmlentities($City);
  $City = mysql_real_escape_string($City);
  $City = $_POST['City'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.City LIKE '%$City%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>


<?php
function query_db6($State){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $State = stripslashes($State);
  }

  $State = htmlentities($State);
  $State = mysql_real_escape_string($State);
  $State = $_POST['State'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.State LIKE '%$State%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>


<?php
function query_db7($Zip_code){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $Zip_code = stripslashes($Zip_code);
  }

  $Zip_code = htmlentities($Zip_code);
  $Zip_code = mysql_real_escape_string($Zip_code);
  $Zip_code = $_POST['Zip_code'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.Zip_code LIKE '%$Zip_code%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>


<?php
function query_db8($Phone_number){
 
require_once('db_login.php');
require_once('DB.php');
  global $db_username, $db_password, $db_host, $db_database;
  
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes_gpc()) {
     $Phone_number = stripslashes($Phone_number);
  }

  $Phone_number = htmlentities($Phone_number);
  $Phone_number = mysql_real_escape_string($Phone_number);
  $Phone_number = $_POST['Phone_number'];
  $query = "SELECT * FROM guardian_roster WHERE guardian_roster.Phone_number LIKE '%$Phone_number%'";

  $result=$connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".$query." ".DB::errorMessage($result));
  }

 
  echo('<table border="1">');
  echo("<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>");
  while ($result_row = $result->fetchrow()) {
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
  echo ("</table>");
  $connection->disconnect();
}
?>
