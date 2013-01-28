<html>
<head>
<title>Student Query</title>
</head>
<body>
<?php

$search = htmlentities($POST["search"]);
$self = htmlentities($SERVER['PHP_SELF']);
if ($search != NULL){
  query_db($search);
}
else {
     echo ('
     <form action="'.$self'" method="post">
       <label> Last Name:
         <input type="text" name="search"/>
       </label>
       <input type="submit value="Go!" />
     </form>
     ');
}

?>
</body>
</html>
              
