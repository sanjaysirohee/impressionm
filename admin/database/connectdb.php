<?php
$baseurl = $_SERVER['SERVER_NAME'];
//echo $baseurl;
if($baseurl=='localhost')
{
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","adotrippremiumdb");
}else{
define("HOSTNAME","localhost");
define("USERNAME","impressionmachinery_db");
define("PASSWORD","9QazuqfcFSmUuNcZfdjb");
define("DATABASE","impressionmachinery_db");
}

$con=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to connect");
?>
