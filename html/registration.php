<html>
<head>
<title> Member Registration!</title>
</head>
<body>

<?php
require_once('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if(DB::isError($connection)){
  die("Could not connect to the database: <br />" .DB::errorMessage($connection));
  }

require_once('insert.php');

  if (isset($_GET["Instructor_id"])){
	$Instructor_id = $_GET["Instructor_id");
  }

  if (isset($_GET["Username"])){
	$Username = $_GET["Username"];
  }

  if (isset($_GET["Password"])){
	$Password = $_GET["Password"];
  }

  if (isset($_GET["Last_name"])){
	$Last_name = $_GET["Last_name"];
  }

  if (isset($_GET["First_name"])){
	$First_name = $_GET["First_name"];
  }

  if (isset($_GET["School_name"])){
	$School_name = $_GET["School_name"];
  }

  if (isset($_GET["Phone_number"])){
	$Phone_number = $_GET["Phone_number"];
  }

  if (isset($_GET["Email"])){
	$Email = $_GET["Email"];
  }

