<html>
<head>
<title>Student Query</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="top">
<h1>Search Students!</h1>
</div>

<div id="left">
<li><a href="#">Home</a></li></br>
  <li><a href="studentupload.php">Insert Student</a></li></br>
  <li><a href="guardianupload.php">Insert Guardian</a></li></br>
  <li><a href="studentquery.php">Search Students</a></li></br>
 <p>1</p>
</div>

<div id="right">
<pre>



<?php
require_once ('db_login.php');
require_once('DB.php');
$connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
  if(DB::isError($connection)){
  die("Could not connect to the database:<br />".DB::errorMessage($connection));
  }

require_once('queryfunction.php');

if (isset($_POST["Last_name"])){
$Last_name = $_POST["Last_name"];

  if ($Last_name !=NULL){
    echo "The search string is $Last_name."; 
      query_db($Last_name);
}
}
else {
     echo ('
     <form action="'.$_SERVER["PHP_SELF"].'" method="POST">
       <label>Last Name: <input type="text" name="Last_name"/> </label>  <input type="submit" value="Go!" />
     </form>
     ');
}

if (isset($_POST["First_name"])){
$First_name = $_POST["First_name"];

  if ($First_name !=NULL){
    echo "The search string is $First_name";
      query_db($First_name);
  }
}
else {
      echo ('
      <form action="'.$_SERVER["PHP_SELF"].'" method="POST">
       <label>First Name: <input type="text" name="First_name"/></label> <input type="submit" value="Go!" />
      </form>
      ');
}

if (isset($_POST["Age"])){
$Age = $_POST["Age"];

 if ($Age !=NULL){
   echo "The search string is $_Age";
     query_db($Age);
 }
}
else {
      echo ('
      <form action="'.$_SERVER["PHP_SELF"]'" method="POST">
       <label>Age: <input type="text" name="Age"/></label> <input type="submit" value="Go!" />
      </form>
      ');
}

if (isset($_POST["Address"])) {
$Address = $_POST["Address"];

  if ($Address !=NULL){
    echo "The search string is $Address";
      query_db($Address);
  }
}
else {
      echo ('
      <form action="'.$_SERVER["PHP_SELF"]'" method="POST">
       <label>Address: <input type="text" name="Address"/></label> <input type="submit" value="Go!" />
      </form>
      ');
}

if (isset($_POST["City"])){
$City = $_POST["City"];

  if ($City !=NULL){
    echo "The search string is $City";
      query_db($City);
  }
}
else {
      echo ('
      <form action="'.$_SERVER["PHP_SELF"]'" method=POST">
       <label>City: <input type="text" name="City"/></label> <input type="submit" value="Go!' />
      </form>
      ');
}
?>
</pre>
</div>
</body>
</html>

