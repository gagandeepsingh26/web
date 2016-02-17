<?php
include_once("../connect.php");
$obj=new connections();

if(isset($_POST["submit"]))
{
	$mname = $_POST["mname"];
	$mphone = $_POST["mphone"];
	$mcity = $_POST["mcity"];
	$mcountry = $_POST["mcountry"];
	$mbrief = $_POST["mbrief"];
	$mid = $_SESSION["mid"];
	$query = "update user set uname= '$mname', uphone='$mphone', ucity= '$mcity', ucountry='$mcountry',ubrief = '$mbrief' where uid = $mid and type = 'm'"   or die(mysql_error()."query");
		mysql_query($query) or die(mysql_error()."query");
		$query4="insert  into adminnotification(message, src,type) values('$mname updated by admin','$mid','m')" or die(mysql_error()."query4");
		mysql_query($query4) or die(mysql_error()."query4");
		$msg ="Moderator updated";
		unset($_SESSION["mid"]);
		header("location:moderator.php?mid=$mid&msg=$msg");
		
		
	
	
}


?>