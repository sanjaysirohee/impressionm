<?php
$baseurl = $_SERVER['SERVER_NAME'];
//echo $baseurl;
if($baseurl=='localhost')
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "impressionm";
}else{
 $servername = "localhost";
 $username = "impressionmachinery_db";
 $password = "9QazuqfcFSmUuNcZfdjb";
 $dbname = "impressionmachinery_db";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

