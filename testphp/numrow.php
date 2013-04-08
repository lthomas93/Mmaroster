<?php
require_once('dblogin.php');
require_once('DB.php');

$connection=DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if (DB::isError($connection))
{
	die ("Could not connect to the database: <br />". DB::errorMessage($connection));
}

$query="SELECT * FROM members";
$result=$connection->query($query);

echo $result->numRows();
?>
