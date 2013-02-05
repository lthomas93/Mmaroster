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
     <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>Last Name:    <input type="text" name="Last_name"/></label> <input type="submit" value="Go!" /> </form></pre>
    ');
}

if (isset($_POST["First_name"])){
$First_name = $_POST["First_name"];

  if ($First_name !=NULL){
    echo "The search string is $First_name";
      query_db1($First_name);
  }
}
else {
      echo ('
     <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>First Name:   <input type="text" name="First_name"/></label> <input type="submit" value="Go!" /> </form></pre>
      ');
}

if (isset($_POST["Age"])){
$Age = $_POST["Age"];

 if ($Age !=NULL){
   echo "The search string is $Age";
     query_db2($Age);
 }
}
else {
      echo ('
      <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>Age:          <input type="text" name="Age"/></label> <input type="submit" value="Go!" /> </form></pre>
      ');
}

if (isset($_POST["Address"])) {
$Address = $_POST["Address"];

  if ($Address !=NULL){
    echo "The search string is $Address";
      query_db3($Address);
  }
}
else {
      echo ('
      <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>Address:      <input type="text" name="Address"/></label> <input type="submit" value="Go!" /></form></pre>
      ');
}

if (isset($_POST["City"])){
$City = $_POST["City"];

  if ($City !=NULL){
    echo "The search string is $City";
      query_db4($City);
  }
}
else {
      echo ('
     <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>City:         <input type="text" name="City"/></label> <input type="submit" value="Go!" /></form></pre>
      ');
}

if (isset($_POST["State"])){
$State = $_POST["State"];

  if ($State !=NULL){
    echo "The search string is $State";
      query_db5($State);
  }
}
else {
      echo ('
     <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>State:        <input type="text" name="State"/></label> <input type="submit" value="Go!" /></form></pre>
      ');
}

if (isset($_POST["Zip_code"])){
$Zip_code = $_POST["Zip_code"];

  if($Zip_code !=NULL) {
    echo "The search string is $Zip_code";
      query_db6($Zip_code);
  }
}
else {
      echo ('
      <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>Zip code:     <input type="text" name="Zip_code"/></label> <input type="submit" value="Go!" /></form></pre>
      ');
}

if (isset($_POST["Phone_number"])){
$Phone_number = $_POST["Phone_number"];

  if($Phone_number !=NULL){
    echo "The search string is $Phone_number";
      query_db7($Phone_number);
  }
}
else {
      echo ('
     <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>Phone Number: <input type="text" name="Phone_number"/><label> <input type="submit" value="Go!" /></form></pre>
      ');
}

if (isset($_POST["Minor"])){
$Minor = $_POST["Minor"];

  if($Minor !=NULL){
    echo "The search string is $Minor";
      query_db8($Minor);
  }
}
else {
      echo ('
     <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>Minor:        <input type="text" name="Minor"/></label> <input type="submit" value="Go!" /></form></pre>
      ');
}

if (isset($_POST["Guardian_id"])){
$Guardian_id = $_POST["Guardian_id"];

  if($Guardian_id !=NULL){
    echo "The search string is $Guardian_id";
     query_db9($Guardian_id);
  }
}
else {
      echo ('
     <pre><form action="'.$_SERVER["PHP_SELF"].'" method="POST"><label>Guardian id:  <input type="text" name="Guardian_id"/></label> <input type="submit" value="Go!" /></form></pre>
      ');
}
?>

</div>
</body>
</html>

