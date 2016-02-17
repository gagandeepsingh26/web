<?php
session_start();
session_destroy();
setcookie("mycookie",0,time()-15*24*60*60);//destroying cookie
header("location:signin.php");
?>