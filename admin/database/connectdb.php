<?php
$baseurl = $_SERVER['SERVER_NAME'];
//echo $baseurl;
if($baseurl=='localhost')
{
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","impressionmdb");
}else{
define("HOSTNAME","localhost");
define("USERNAME","impressionmipl_crmdb");
define("PASSWORD","Z7AG6xXRk5Cwxn5w9FqS");
define("DATABASE","impressionmipl_crmdb");
}

$con=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to connect");
?>
