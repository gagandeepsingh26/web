<?php
include_once("../connect.php");
$obj=new connections();

if (isset($_GET["nid"]))
{
	$nid = $_GET["nid"];
	$query="update  adminnotification set deleted =1 where nid = $nid" or die(mysql_error()."query");
		mysql_query($query) or die(mysql_error()."query");
		$_SESSION['message'] = 'Notification Deleted';
		header("location:adminpanel.php");
		
}


?>