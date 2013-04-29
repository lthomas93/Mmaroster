<?php
//$jsondata = '{"a": 1, "b":2}';
$_POST["jsondata"] = "$jsondata";
if (isset($_POST["jsondata"]))
{
 	$jsondata = $_POST["jsondata"];

	$jsondata = '{"a": 1, "b":2}';
	var_dump(json_decode($jsondata, true));
}
?>
