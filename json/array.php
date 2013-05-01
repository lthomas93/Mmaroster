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


function modified()
{
	global $jsondata;
	$decodedJsondata['modified'] = json_decode($jsondata, true);
	$modified = $decodedJsondata['modified'];
		
	while (list($a, $b) = each($modified))
	{
		while (list($c, $d) = each($b))
		{
			if ($c = "commits")
			{	
				while (list($e, $f) = each($d))
				{
					if ($e == "modified")
					{
						while (list($g, $h) = each($f))
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
