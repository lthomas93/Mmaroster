<html>
<head>
<title>Student Deletion</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="top">
<h1>Delete Students!</h1>
</div>

<div id="left">
<?php
require_once('nav.php');
nav_menu();
?>
</div>

<div id="right">




<?php

require_once('db_login.php');
require_once('DB.php');
require_once('deletefunction1.php');

$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if(DB::isError($connection))
{
	die("Could not connect to the database:<br />".DB::errorMessage($connection));
}


if (isset($_POST["Student_id"]))
{
	$Student_id = $_POST["Student_id"];
	echo "Student was deleted from the roster";
	delete_student($Student_id);
}

//else
//{
	$query = "SELECT * FROM student_roster";
	$result= $connection->query($query);
	if (DB::isError($result))
	{
		die("Could not query the database.</br>". DB::errorMessage($result));
	}


	echo('<table border="1">');   
	echo("<tr><th>Student Id</th>");
	echo("<th>Last Name</th>");
	echo("<th>First Name</th>");
	echo("<th>Age</th>");
	echo("<th>Address</th>");
	echo("<th>City</th>");
	echo("<th>State</th>");
	echo("<th>Zip Code</th>");
	echo("<th>Phone Number</th>");
	echo("<th>Minor</th>");
	echo("<th>Guardian Id</th></tr>");

	while ($result_row = $result->fetchrow())
		{
		
			echo "<tr><td>";
			echo $result_row[0] . '</td><td>';
			echo $result_row[1] . '</td><td>';
			echo $result_row[2] . '</td><td>';
			echo $result_row[3] . '</td><td>';
			echo $result_row[4] . '</td><td>';
			echo $result_row[5] . '</td><td>';
			echo $result_row[6] . '</td><td>';
			echo $result_row[7] . '</td><td>';
			echo $result_row[8] . '</td><td>';
			echo $result_row[9] . '</td><td>';
			echo $result_row[10] . '</td></tr>';
		} 
	echo ("</table>");

//}


echo
('
	<form action="'.$_SERVER["PHP_SELF"].'" method="POST">
	<pre><label>Student Id: <input type="text" name="Student_id"/></label> <input type="submit" value="Delete!"/></br></pre>
	</form>
');

?>

</div>
</body>
</html>
