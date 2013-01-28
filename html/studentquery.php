<html>
<head>
<title>Student Query</title>
</head>
<body>
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
</body>
</html>
              
