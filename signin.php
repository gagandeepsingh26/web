<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign In</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="js/myscript.js"> </script>
<script src="js/jquery.js"></script>
</head>
<?php
include_once("connect.php");
if(isset($_SESSION["uname"]))
{
header("location:index.php");
}


if(isset($_POST["submit"]))
{
	$a=$_POST["email"];
	$b=$_POST["password"];
	$obj=new connections();
	if(!isset($_SESSION["modname"]) and !isset($_SESSION["uname"]) and !isset($_SESSION["admin"]))
		{
	$query2="select uemail,uname from user where uemail='$a' and upassword='$b' and type = 'u'" ;
		$result2=mysql_query($query2) ;
		$ans2=mysql_fetch_array($result2) ;	
		
		if(!empty($ans2[0]))
		{
			$_SESSION["uemail"]=$ans2[0];
			$_SESSION["uname"]=$ans2[1];
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
<p class="logintitle"> Sign In</p>

<form id="form1" name="form1" method="post" class="loginform"> 

<input type="text" name="email" id="email" placeholder="User ID">
 <input type="password" name="password" id="password" placeholder="Password"><br>
<input type="submit" name="submit" id="b1" value="" class="loginbutton" > <br> </form>
</div>
</div>
</body>
</html>
