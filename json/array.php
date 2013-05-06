<?php
function username()
{
	global $decodedJsondata;
	
	while (list($a, $b) = each($decodedJsondata))
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
	global $decodedJsondata;
		
	while (list($a, $b) = each($decodedJsondata))
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
        global $decodedJsondata;

        while (list($a, $b) = each($decodedJsondata))
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
        global $decodedJsondata;
        
	while (list($a, $b) = each($decodedJsondata))
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
	global $decodedJsondata;
	
	while (list($a, $b) = each ($decodedJsondata))
	{
		if ($a =="repository")
		{
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



if (!isset($_POST["payload"]))
{
	exit();
}

$decodedJsondata = json_decode($_POST["payload"], true);
username();
modified();
removed();
added();
branch();


?>
