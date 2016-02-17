<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Here</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<?php
$msg="";
include_once("connect.php");
if(isset($_SESSION["uname"]))
{
header("location:index.php");
}


if(isset($_POST["submit"]))
{
	$obj=new connections();
	$uname=$_POST["uname"];
$uemail=$_POST["uemail"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$city=$_POST["city"];
$country=$_POST["country"];
$phone=$_POST["phone"];
$brief=$_POST["brief"];

$query1="select * from user where uemail='$uemail'" ;
		$result1=mysql_query($query1) ;
		$ans1=mysql_fetch_array($result1) ;
		if(!empty($ans1[0]))
		{
			$msg= "User already exist";
		}
else
{
if(empty($uname) || empty($password) || empty($cpassword) || empty($uemail) || empty($_POST["gender"]) || empty($city) || empty($country) || empty($phone) || empty($brief))
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
		$query="insert  into user(uname, uemail, upassword, ugender, ucity, ucountry, ubrief, uphone,type) values('$uname','$uemail','$password','$gender','$city','$country','$brief',$phone,'u')" or die(mysql_error()."query");
		mysql_query($query) or die(mysql_error()."query");
		
		$query2="select uid from user where uemail='$uemail' and type ='u'" ;
		$result2=mysql_query($query2) ;
		$ans2=mysql_fetch_array($result2) ;
		$id = $ans2[0];
		$query3="insert  into adminnotification(message, src, type) values('New User registered','$id','u')" or die(mysql_error()."query3");
		mysql_query($query3) or die(mysql_error()."query3");
		$_SESSION["uname"] = $uname;
		$_SESSION["uemail"] = $uemail;
		header("location:index.php");
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
<div class="login">
<p class="registertitle"> Register Here !</p>

<form id="form1" name="form1" method="post" class="registerform"> 

<p style="text-align:center; padding:5px; margin:5px">
<?php
print "$msg";
?></p>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="text" placeholder="Name" name="uname" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="email" placeholder="Email ID" name="uemail" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="password" placeholder="Password" name="password" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="password" placeholder="Confirm Password" name="cpassword" class="addformelement"><br>
<label><input type="radio" name="gender" value="male" class="addformradio"> <span class="font">Male</span></label><br>
<label><input type="radio" name="gender" value="female" class="addformradio"> <span class="font">Female</span></label><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="text" placeholder="City" name="city" class="addformelement"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><input type="text" placeholder="Country" name="country" class="addformelement"><br>
<input type="text" placeholder="Phone" name="phone" class="addformelement" style="margin-left:13px;"><br>
<span style="color:rgba(239,7,11,1.00);">*</span><textarea placeholder="Brief Introduction..." name="brief" class="addformelement"></textarea>
<br>
<input type="submit" name="submit" id="b1" value="" class="registerbutton" > <br>

 </form>
</div>
</div>
</body>
</html>
