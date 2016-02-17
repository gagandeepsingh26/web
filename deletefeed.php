<?php
include_once("connect.php");
$obj=new connections();

if(isset($_GET["fid"]))
{
	$fid = $_GET["fid"];
	$qid = $_GET["qid"];
	$mid = $_SESSION["modid"];
	$mname = $_SESSION["modname"];
	$query = "update feedback set status= 'd', statusby = $mid, statuson = now() where fid = $fid"  or die(mysql_error()."query");
		mysql_query($query) or die(mysql_error()."query");
		header("location:answer.php?qid=$qid");	
}
?>