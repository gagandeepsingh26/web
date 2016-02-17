<?php
include_once("../connect.php");
$obj=new connections();

if (isset($_GET["mid"]))
{
	$mid = $_GET["mid"];
	$query2="select uid,uname from user where uid=$mid" ;
		$result2=mysql_query($query2) ;
		$ans2=mysql_fetch_array($result2) ;
		$id = $ans2[0];
		
	$query="insert into moderatarchive SELECT uid, uname, uemail, ugender, ucity, ucountry, ubrief, uphone FROM user where uid = $mid and type = 'm'"  or die(mysql_error()."query");
		mysql_query($query) or die(mysql_error()."query");
	$query1="delete from moderat where uid = $mid and type = 'm'" or die(mysql_error()."query1");
		mysql_query($query1) or die(mysql_error()."query1");
		$query4="update  adminnotification set deleted =1 where type = 'm' and src = $id "  or die(mysql_error()."query4");
		mysql_query($query4) or die(mysql_error()."query4");
		$_SESSION['message'] = 'Moderator Deleted';
		$query3="insert  into adminnotification(message, date, type) values('Admin deleted Moderator $mname',now(),'e')" or die(mysql_error()."query3");
		mysql_query($query3) or die(mysql_error()."query3");
		header("location:adminpanel.php");
		
}


?>