<html>
<head>
<title>Guardian Roster!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>


<div id="top">
<h1>Student Roster!</h1>
</div>

<div id="left">
<?php
require_once('nav.php');
nav_menu();
?>
</div>

<div id="right">
<pre>

<?php
require_once('db_login.php');
require_once('DB.php');

$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if (DB::isError($connection)){
    die ("Could not connect to the database!</br>".DB::errorMessage($connection));
    }

$query = "SELECT * FROM guardian_roster";
$result = $connection->query($query);
  if (DB::isError($result)){
    die ("Could not query the database!</br>".DB::errorMessage($result));
  }

echo ('<table border="1">');
echo ('<tr><th>Guardian Id</th><th>Last Name</th><th>First Name</th><th>Age</th><th>Address</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone Number</th></tr>');
  while ($result_row = $result->fetchrow()){
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
echo ("</tabel>");
$connection->disconnect();
?>
</pre>
</body>
</html>
                                                                                                                             61,5          Bot

