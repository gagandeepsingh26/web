<?php
if(!isset($_SESSION["admin"]))
{
$message="Restricted Area";
header("location:signin.php?msg=".$message);
}
else
{
$name=$_SESSION["admin"] ;
print "$name";
}

?>