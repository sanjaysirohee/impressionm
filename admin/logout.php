<?php
session_start();
if(isset($_SESSION["isloginur"]))
{
unset($_SESSION["isloginur"]);
}
if(isset($_COOKIE["userdetail"]))
{
setcookie("userdetail","",time()-1,"/");
}
session_destroy();
header("location:login.php");
?>