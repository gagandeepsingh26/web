<?php
if(!isset($_SESSION["uemail"]) and !isset($_SESSION["modname"]) and !isset($_SESSION["admin"]))
{
$message="Restricted Area";
header("location:signin.php?msg=".$message);
}
else if (isset($_SESSION["modname"]))
{
$name=$_SESSION["modname"] ;
print "$name";
}
else if (isset($_SESSION["admin"]))
{
$name=$_SESSION["admin"] ;
print "$name";
}
else if (isset($_SESSION["uname"]))
{
$name=$_SESSION["uname"] ;
print "$name";
}

?>