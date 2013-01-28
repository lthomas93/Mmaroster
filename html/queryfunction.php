<?php
function query_db($Last_name){
  
  require_once(db_login.php);
  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
     die("Could not query the database: <br />". DB::errorMessage($connection));
  }

  if (get_magic_quotes()) {
     $Last_name = stripslashes($Last_name);
  }

  $Last_name = mysql_real_escape_string($Last_name);
  $query = "SELECT * FROM members WHERE Last_name LIKE '%$Last_name%'";

  $result = $connection->query($query);
  if (DB::isError($result)){
     die("Could not query the database:<br />".
     $query." ".DB::errorMessage($result));
  }

  echo('<table border="1">');
  echo("<tr><th>Student Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th><th>Minor</th><th>Guardian Id</th></tr>");
  while ($result_row = $result->fetchrow()) {
     echo "<tr><td>";
     echo $result_row[1] . '</td><td>';
     echo $result_row[2] . '</td><td>';
     echo $result_row[3] . '</td><td>';
     echo $result_row[4] . '</td><td>';
     echo $result_row[6] . '</td><td>';
     echo $result_row[7] . '</td><td>';
     echo $result_row[8] . '</td><td>';
     echo $result_row[9] . '</td><td>';
     echo $result_row[10] . '</td><td>';
     echo $result_row[11] . '</td></tr>';
  }
  echo ("</table>");
  $connection_>disconnect();
}
