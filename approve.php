<?php
include_once("connect.php");
$obj=new connections();

if(isset($_GET["fid"]))
{
	$fid = $_GET["fid"];
	$qid = $_GET["qid"];
	$mid = $_SESSION["modid"];
	$mname = $_SESSION["modname"];
	$query = "update feedback set status= 'a', statusby = $mid, statuson = now() where fid = $fid"  or die(mysql_error()."query");
		mysql_query($query) or die(mysql_error()."query");
		$query4="insert into adminnotification(message, src,type) values('$mname approved a comment','$qid','q')" or die(mysql_error()."query4");
		mysql_query($query4) or die(mysql_error()."query4");
		header("location:answer.php?qid=$qid");	
}
?>