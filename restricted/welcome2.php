<?php
if(!isset($_SESSION["modname"]))
{
$message="Restricted Area";
header("location:signin.php?msg=".$message);
}
else
{
$name=$_SESSION["modname"] ;
print "$name";
}

?>