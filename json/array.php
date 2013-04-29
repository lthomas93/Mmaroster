<?php
function username()
{
$decodedJsondata = json_decode($jsondata, true);
$username = $decodedJsondata['username'];
}
?>
