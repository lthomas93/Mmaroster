<html>
<head>
<title>Student Query</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="top">
<h1>Search Students!</h1>
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
require_once ('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
if(DB::isError($connection))
{
	die("Could not connect to the database:<br />".DB::errorMessage($connection));
}

require_once('query.php');

if ($_SESSION['loggedin'] != "YES")
{
	echo "You are not logged in!";
	exit;
}

if (isset($_POST["Last_name"]))
{
	$Last_name = $_POST["Last_name"];

	if ($Last_name !=NULL)
	{
    		$column = "Last_name";
		$info = $Last_name;
		echo "The search string is $Last_name.";
      		query($info);
 	}	
}

if (isset($_POST["First_name"]))
{
	$First_name = $_POST["First_name"];

  	if ($First_name !=NULL)
	{
    		$column = "First_name";
		$info = $First_name;
		echo "The search string is $First_name";
      		query($info);
		exit;
  	}
}

if (isset($_POST["Age"]))
{
	$Age = $_POST["Age"];

 	if ($Age !=NULL)
	{
   		$column = "Age";
		$info = $Age;
		echo "The search string is $Age";
     		query($info);
 	}
}

if (isset($_POST["Address"]))
{
	$Address = $_POST["Address"];

  	if ($Address !=NULL)
	{
		$column = "Address";
		$info = $Address;
    		echo "The search string is $Address";
      		query($info);
  	}
}

if (isset($_POST["City"]))
{
	$City = $_POST["City"];

  	if ($City !=NULL)
	{
		$column = "City";
		$info = $City;
    		echo "The search string is $City";
      		query($info);
  	}
}

if (isset($_POST["State"]))
{
	$State = $_POST["State"];

  	if ($State !=NULL)
	{
		$column = "State";
		$info = $State;
    		echo "The search string is $State";
      		query($info);
  	}
}

if (isset($_POST["Zip_code"]))
{
	$Zip_code = $_POST["Zip_code"];

  	if($Zip_code !=NULL) 
	{
		$column = "Zip_code";
		$info = $Zip_code;
    		echo "The search string is $Zip_code";
      		query($info);
  	}
}

if (isset($_POST["Phone_number"]))
{
	$Phone_number = $_POST["Phone_number"];

  	if($Phone_number !=NULL)
	{
		$column = "Phone_number";
		$info = $Zip_code;
    		echo "The search string is $Phone_number";
      		query($info);
  	}	
}

if (isset($_POST["Minor"]))
{
	$Minor = $_POST["Minor"];

  	if($Minor !=NULL)
	{
		$column = "Minor";
		$info = $Minor;
    		echo "The search string is $Minor";
      		query($info);
  	}
}

if (isset($_POST["Guardian_id"]))
{
	$Guardian_id = $_POST["Guardian_id"];

  	if($Guardian_id !=NULL)
	{
		$column = "Guardian_id";
		$info = $Guardian_id;
   		echo "The search string is $Guardian_id";
    		query($info);
  	}
}
else{
 echo ('
<form action='.$_SERVER["PHP_SELF"].' method="POST">
<pre><label>Last Name:    <input type="text" name="Last_name"/></label> <input type="submit" value="Search!"/></br>
<label>First Name:   <input type="text" name="First_name"/></label> <input type="submit" value="Search!"/></br>
<label>Age:          <input type="text" name="Age"/></label> <input type="submit" value="Search!"/></br>
<label>Address:      <input type="text" name="Address"/></label> <input type="submit" value="Search!"/></br>
<label>City:         <input type="text" name="City"/></label> <input type="submit" value="Search!"/></br>
<label>State:        <input type="text" name="State"/></label> <input type="submit" value="Search!"/></br>
<label>Zip Code:     <input type="text" name="Zip_code"/></label> <input type="submit" value="Search!"/></br>
<label>Phone number: <input type="text" name="Phone_number"/></label> <input type="submit" value="Search!"/></br>
<label>Minor:        <input type="text" name="Minor"/></label> <input type="submit" value="Search!"/></br>
<label>Guardian Id:  <input type="text" name="Guardian_id"/></label> <input type="submit" value="Search!"/></br>
</form></pre>
');
}

?>

</div>
</body>
</html>
