<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Change Password</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<?php
include_once("../connect.php");
$obj=new connections();
if(isset($_SESSION["admin"]))
{
	header("location:adminpanel.php");
}


if(isset($_POST["submit"]))
{
	if (isset($_SESSION["modname"]))
	{
		$mid = $_SESSION["modid"];
		$mname = $_SESSION["modname"];
	}
	if (!empty($_POST["oldpassword"]) && !empty($_POST["newpassword"]) && !empty($_POST["confirmpassword"]))
	{
		$oldp=$_POST["oldpassword"];
		$newp=$_POST["newpassword"];
		$conp=$_POST["confirmpassword"];
		print $oldp;
		if($newp == $oldp)
		{
			$msg ="Password same as previous password ";
		}
		
		if($newp == $conp)
		{
			$query = "update user set upassword= '$newp', login = 1 where uid = $mid and type ='m'"  or die(mysql_error()."query");
		mysql_query($query) or die(mysql_error()."query");
		$query4="insert  into adminnotification(message, src,type) values('$mname logged in first time','$mid','m')" or die(mysql_error()."query4");
		mysql_query($query4) or die(mysql_error()."query4");
		$msg ="Password changed";
		header("location:moderatpanel.php");
		}
	
}
}
else
{
	print"invalid";
}

?>

<body>
<div class="top">
<div class="head">
  <p class="headtext1">Sarbat Khalsa</p>
  <hr width="120px" size="4" align="left" color="#137FF1" style="margin-left:30px; margin-top:-1px;">
  
    <p class="headtext2">World Sikh Parliament</p>
</div>
<hr size="4" color="#000000" style="margin-top:30px">
</div>
<div id="content">
<div class="login">
<p class="logintitle"> Change Password </p>


<form id="form1" name="form1" method="post" class="loginform"> 
<h1 align="center">
<?php
if (isset($_SESSION["modname"]))
{
$mod = $_SESSION["modname"];
print "welcome, $mod";
}
?>
</h1>
<p id="hide" style="text-align:center; font-size:14px; color:rgba(233,7,10,1.00);"> <?php
	print '$msg';
?>
</p>
 <input type="password" name="oldpassword" id="oldpassword" placeholder="Old Password"><br>
 <input type="password" name="newpassword" id="newpassword" placeholder="New Password"><br>
 <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password"><br>
<input type="submit" name="submit" id="b1" value="" class="loginbutton" > <br> </form>
</div>
</div>
</body>
</html>
