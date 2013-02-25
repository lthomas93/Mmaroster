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
require_once('deletefunction2.php');

$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if(DB::isError($connection))
{
    die("Could not connect to the database:<br />".DB::errorMessage($connection));
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
