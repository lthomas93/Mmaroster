<?php
function username()
{
global $jsondata;
$decodedJsondata['username'] = json_decode($jsondata, true);
$username = $decodedJsondata['username'];
//print_r($username);
	while (list($a, $b) = each($username))
	{
	//	echo "$b </br>";
		while (list($c, $d) = each($b))
		{
			while (list($e, $f) = each($d))
			{
				echo "$f</br>";
			}
		}
	}
}
?>
