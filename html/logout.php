<html>
<head>
<title>Logging out</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="top">
<h1>Logged out!</h1>
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
echo ('<pre>You are now logged out!</pre>');
session_destroy();
?>

</div>
</body>
</html>

