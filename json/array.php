<?php

function username()
{
global $jsondata;
$decodedJsondata['username'] = json_decode($jsondata, true);
$username = $decodedJsondata['username'];
	
while (list($a, $b) = each($username))
	{
		while (list($c, $d) = each($b))
		{
			while (list($e, $f) = each($d))
			{
				if ($e == "committer")
				{
					while (list($g, $h) = each($f))
					{
						if ($g =="username")
						{
							echo "$h <br>";
						}
					}	
				}	
			}
		}
	}
}


?>
