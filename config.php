<?php
$baseurl = $_SERVER['SERVER_NAME'];
//echo $baseurl;
if($baseurl=='localhost')
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "impressionmdb";
}else{
 $servername = "localhost";
 $username = "impressionmipl_crmdb";
 $password = "Z7AG6xXRk5Cwxn5w9FqS";
 $dbname = "impressionmipl_crmdb";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

