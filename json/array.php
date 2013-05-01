<?php
function username()
{
global $jsondata;
$decodedJsondata['username'] = var_dump(json_decode($jsondata, true));
$username = $decodedJsondata['username'];
//$decodedJsondata['username'] = var_dump(json_decode($jsondata,true));
}
?>
