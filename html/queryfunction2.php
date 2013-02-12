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
  $query = "SELECT * FROM student_roster WHERE guardian_roster.Guardian_id LIKE '%$Guardian_id%'";

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
