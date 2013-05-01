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
                                                        syslog(LOG_INFO,"username: $h");
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
							syslog(LOG_INFO,"modified: $h");
						}	
					}	
				}	
			}
		}		
	}
}


function removed()
{
        global $jsondata;
        $decodedJsondata['removed'] = json_decode($jsondata, true);
        $removed = $decodedJsondata['removed'];

        while (list($a, $b) = each($removed))
        {
                while (list($c, $d) = each($b))
                {
                        if ($c = "commits")
                        {
                                while (list($e, $f) = each($d))
                                {
                                        if ($e == "removed")
                                        {
                                                while (list($g, $h) = each($f))
                                                {
                                                        syslog(LOG_INFO, "removed: $h");
                                                }
                                        }
                                }
                        }
                }
        }
}

function added()
{
        global $jsondata;
        $decodedJsondata['added'] = json_decode($jsondata, true);
        $added = $decodedJsondata['added'];

        while (list($a, $b) = each($added))
        {
                while (list($c, $d) = each($b))
                {
                        if ($c = "commits")
                        {
                                while (list($e, $f) = each($d))
                                {
                                        if ($e == "added")
                                        {
                                                while (list($g, $h) = each($f))
                                                {
                                                        syslog(LOG_INFO, "added: $h");
                                                }
                                        }
                                }
                        }
                }
        }
}

function branch()
{
	global $jsondata;
	$decodedJsondata['branch'] = json_decode($jsondata, true);
	$branch = $decodedJsondata['branch'];
	
	while (list($a, $b) = each ($branch))
	{
		//echo "$b <BR>";
		if ($a =="repository")
		{
			//echo "$b";
			while (list($c, $d) = each($b))
			{
				if ($c == "master_branch")
				{
					syslog(LOG_INFO, "repository master_branch: $d");
				}
			}
		}
	}
}



if (isset($_POST["jsondata"]))
{
                username();
                modified();
                removed();
                added();
                branch();
}

?>
