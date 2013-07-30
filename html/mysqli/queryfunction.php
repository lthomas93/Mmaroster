<?php
require_once "dblogin.php";

$mysqli= mysqli_connect("$db_host", "$db_username", "$db_password", "$db_database");
if (mysqli_connect_errno($mysqli))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

