<?php
session_start();
if(isset($_SESSION["uname"]))
{
	session_destroy();
setcookie("mycookie",0,time()-15*24*60*60);//destroying cookie
header("location:signin.php");	
}
else
{
session_destroy();
setcookie("mycookie",0,time()-15*24*60*60);//destroying cookie
header("location:restricted/signin.php");
}
?>