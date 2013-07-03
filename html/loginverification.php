<?php
if (!isset($_SESSION))
{
        session_start();
}

function signup_sheet()
{
echo '
<pre><h1>Please register!</h1>
<form action="'.$_SERVER["PHP_SELF"].'" method="POST">
<label> Username:     <input type="text" name="Username" value="'.$_SESSION['username'].'" /> </label> </br>
<label> Password:     <input type="text" name="Password" value="'.$_SESSION['password'].'" /> </label> </br>
<label> Last Name:    <input type="text" name="Last_name" value="'.$_SESSION['last_name'].'" /> </label> </br>
<label> First Name:   <input type="text" name="First_name" value="'.$_SESSION['first_name'].'" /> </label> </br>
<label> School Name:  <input type="text" name="School_name" value="'.$_SESSION['school_name'].'" /> </label> </br>
<label> Phone Number: <input type="text" name="Phone_number" value="'.$_SESSION['phone_number'].'"/> </label> </br>
<label> Email:        <input type="text" name="Email" value="'.$_SESSION['email'].'"/> </label> </br>
<input type="submit" value="Complete Registration!">
</form></pre>';
session_destroy();
exit;
}

function verification_username($Username)
{
        require_once('db_login.php');
        global $db_username, $db_password, $db_host, $db_database;
        require_once('DB.php'); //pears file location.
        $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
        if(DB::isError($connection))
        {
	        die("Could not connect to the database:<br />".DB::errorMessage($connection));
        }


  	if ($Username =="")
	{
     		echo "Please enter a username.</br>";
     		exit;
  	}
  	if ((strlen($Username) < 5) || (strlen($Username) > 12))
	{
     		echo "The username is the wrong length. It must be 5-12 characters.</br>";
     		exit;
  	}
	

        $query="SELECT * FROM members WHERE Username = '$Username'";
        $result=$connection->query($query);

	if(DB::isError($result))
        {
                die("Could not query the database: <br />".DB::errorMessage($result));
        }
        $verify = $result->numRows();
        if ($verify == "1")
        {
	//	continue;
		echo "Your username is not avaible";
		signup_sheet();
//		exit;
	}	

}  

function verification_password($Password)
{
  	if ($Password == "")
	{
     		echo "Please enter a password.</br>";
     		exit;
  	}
  	if ((strlen($Password) < 6) || (strlen($Password) > 12))
	{
     		echo "The password is the wrong length. It must be 6-12 characters.</br>";
     		exit; 
  	}
}

function verification_lastname($Last_name)
{
  	if ($Last_name == "")
	{
     		echo "Please enter your last name. </br>";
     		exit;
	} 
}

function verification_firstname($First_name)
{
  	if ($First_name == "")
	{
     		echo "Please enter your first name. </br>";
     		exit;
  	}
}

function verification_schoolname($School_name)
{
  	if ($School_name == "")
	{
     		echo "Please enter your school name. </br>";
     		exit;
  	}
}

function verification_phonenumber($Phone_number)
{
  	if ($Phone_number == "")
	{
     		echo "Please enter a phone number.</br>";
     		exit;
  	}
  	if ((strlen($Phone_number) < 10) || (strlen($Phone_number) > 10))
	{
     		echo "Please verify the ten digit phone number including the area code.</br>";
     		exit;
  	}
}

function verification_email($Email)
{
  	if ($Email == "")
	{
     		echo "Please enter your email.";
     		exit;
  	}
}


?>
