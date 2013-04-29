<?php
if (isset($_POST["jsondata"]))
{
	$jsondata = $_POST["jsondata"];
	if ($jsondata = $_POST["jsondata"])
	{
		var_dump(json_decode($jsondata, true));
	}
}
?>
