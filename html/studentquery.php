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

require_once('queryfunction.php');
//require_once('db_login.php');
//  $connection = DB::connect("mysql://$db_username:$db_password@$db_host/$db_database");
//  if (DB::isError($connection)){
//     die("Could not query the database: <br />". DB::errorMessage($connection));
//  }

if(isset($search)){
$search = htmlentities($_POST["search"]);
}
$self = htmlentities($_SERVER['PHP_SELF']);
if (isset($search)){
 ($search != NULL);
  query_db($search);
}
else {
     echo ('
     <form action="'.$self.'" method="post">
       <label>Last Name:
         <input type="text" name="search"/>
       </label>
       <input type="submit" value="Go!" />
     </form>
 ');
}

?>
</pre>
</div>
</body>
</html>

