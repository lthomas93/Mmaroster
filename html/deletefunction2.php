<?php

function delete_guardian($Guardian_id)
{
	require_once ('db_login.php');
	require_once('DB.php');

	global $db_username, $db_password, $db_host, $db_database;
	$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
	if(DB::isError($connection))
	{
		die("Could not connect to the database:<br />".DB::errorMessage($connection));
	}



	$query = "DELETE FROM guardian_roster WHERE Guardian_id LIKE '$Guardian_id'";
	$result= $connection->query($query);
	if (DB::isError($result))
	{
		die("Could not query the database.</br>". DB::errorMessage($result));
	}
	
}

function query_guardian()
{
        require_once ('db_login.php');
        require_once('DB.php');

        global $db_username, $db_password, $db_host, $db_database;
        $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
        if(DB::isError($connection))
        {
                die("Could not connect to the database:<br />".DB::errorMessage($connection));
        }





	$query = "SELECT * FROM guardian_roster";
	$result= $connection->query($query);
	if (DB::isError($result))
	{
	    die("Could not query the database.</br>". DB::errorMessage($result));
	}


	echo('<table border="1">');
	echo("<tr><th>Guardian Id</th>");
	echo("<th>Last Name</th>");
	echo("<th>First Name</th>");
	echo("<th>Age</th>");
	echo("<th>Address</th>");
	echo("<th>City</th>");
	echo("<th>State</th>");
	echo("<th>Zip Code</th>");
	echo("<th>Phone Number</th></tr>");



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
		echo $result_row[8] . '</td></tr>';
	}
	echo ("</table>");

	echo
	('
		<form action="'.$_SERVER["PHP_SELF"].'" method="POST">
		<pre><label>Guardian Id: <input type="text" name="Guardian_id"/></label> <input type="submit" value="Delete!"/></br></pre>
		</form>
	');

}
?>
