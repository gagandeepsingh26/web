<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Moderator</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="js/myscript.js"> </script>
<script src="js/jquery.js"></script>
</head>
<?php 
include_once("../connect.php");
$msg="";
$obj =new connections();

if(isset($_POST["submit"]))
{
$mname=$_POST["mname"];
$memail=$_POST["memail"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$city=$_POST["city"];
$country=$_POST["country"];
$phone=$_POST["phone"];
$brief=$_POST["brief"];

$query1="select * from user where uemail='$memail'" ;
		$result1=mysql_query($query1) ;
		$ans1=mysql_num_rows($result1) ;

	if($ans1 == 1)
		{
			$msg= "User already exist";
		}
else
{
if(empty($mname) || empty($password) || empty($cpassword) || empty($memail) || empty($_POST["gender"]) || empty($city) || empty($country) || empty($phone) || empty($brief))
{
$msg="Please review your entries";
}
else if ($password != $cpassword)
{
	$msg = "Password Mismatch";
}
else
{
	$gender=$_POST["gender"];
		$query="insert  into user(uname, uemail, upassword, ugender, ucity, ucountry, ubrief, uphone,type, login) values('$mname','$memail','$password','$gender','$city','$country','$brief',$phone,'m',0)" or die(mysql_error()."query0");
		mysql_query($query) or die(mysql_error()."query1");
		$msg="Moderator Added";
		
		$query2="select uid from user where uemail='$memail'" ;
		$result2=mysql_query($query2) ;
		$ans2=mysql_fetch_array($result2) ;
		$id = $ans2[0];
		$query3="insert  into adminnotification(message, src, date,type) values('Admin added new Moderator $mname','$id',now(),'m')" or die(mysql_error()."query3");
		mysql_query($query3) or die(mysql_error()."query3");
		}
}
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
<div id="sidebar">
<div id="userinfo">
<h1> Welcome </h1>
<h2><?php
include_once("welcome.php");
?></h2>
<a href="signout.php" >logout</a>
</div>
<?php
	include_once("../menu.php");
	?>
</div>
<div class="admincontext">
<p class="admincontexttitle"> Add Moderator
</p>
<form class="moderatorform" name="form1" method="post">
<p style="text-align:center; padding:5px; margin:5px">
<?php
print "$msg";
?></p>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="text" placeholder="Moderator Name" name="mname" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="email" placeholder="Email ID" name="memail" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="password" placeholder="Password" name="password" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="password" placeholder="Confirm Password" name="cpassword" class="addformelement"><br>
<label><input type="radio" name="gender" value="male" class="moderatorformradio"> <span class="font">Male</span></label><br>
<label><input type="radio" name="gender" value="female" class="moderatorformradio"> <span class="font">Female</span></label><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="text" placeholder="City" name="city" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="text" placeholder="Country" name="country" class="addformelement"><br>
<input type="text" placeholder="Phone" name="phone" class="addformelement" style="margin-left:13px;"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><textarea placeholder="Brief Introduction..." name="brief" class="addformelement"></textarea>
<br>
<input type="submit" value="" name="submit" class="moderatorformbutton">

</form>

</div>
</div>
</body>
</html>
