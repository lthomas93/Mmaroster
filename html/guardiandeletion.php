<html>
<head>
<title>Student Deletion</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="top">
<h1>Delete Students!</h1>
<?php
if (!isset($_SESSION))
{
        session_start();
}

require_once('nav.php');
login_nav();
?>
</div>

<div id="left">
<?php
nav_menu();
?>
</div>

<div id="right">




<?php
require_once('db_login.php');
//require_once('DB.php');
require_once('deletefunction2.php');

$mysqli = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_database");
if (mysqli_connect_error($mysqli))
{
	echo "Failed to connect to mysql: " . mysqli_connect_error();
}
else
{
	echo "You are properly connect!";
}
//$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
//if(DB::isError($connection))
//{
//    die("Could not connect to the database:<br />".DB::errorMessage($connection));
//}
if ($_SESSION['loggedin'] != "YES")
{
	echo "You are not logged in!";
	exit;
}

if (isset($_POST["Guardian_id"]))
{
    $Guardian_id = $_POST["Guardian_id"];
    delete_guardian($Guardian_id);
    query_guardian();
    exit;
}

else
{
    query_guardian();
}

?>

</div>
</body>
</html>
