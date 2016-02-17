<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Question</title>
<link href="restricted/css/style.css" type="text/css" rel="stylesheet">
</head>
<?php 
include_once("connect.php");
$msg="";
$obj =new connections();

if(isset($_POST["submit"]))
{

if( empty($_POST["qback"]) || empty($_POST["question"]))
{
}
else
{
		$question=$_POST["question"];
		$bques=$_POST["qback"];
		if (isset($_SESSION["uname"]))
		{
			$uemail = $_SESSION["uemail"];
			$uname = $_SESSION["uname"];
		}
		else if (isset($_SESSION["modname"]))
		{
			$uemail = $_SESSION["modmail"];
			$uname = $_SESSION["modname"];
		}
		$query2="select uid from user where uemail='$uemail'" ;
		$result2=mysql_query($query2) ;
		$ans2=mysql_fetch_array($result2) ;
		$id = $ans2[0];
		
		$query3="insert  into question(uid, quest, background) values('$id','$question','$bques')" or die(mysql_error()."query3");
		mysql_query($query3) or die(mysql_error()."query3");
		
		$query4="select qid from question where quest='$question' order by poston limit 1" ;
		$result4=mysql_query($query4) ;
		$ans4=mysql_fetch_array($result4) ;
		$id4 = $ans4[0];
		$query4="insert  into adminnotification(message, src,type) values('$uname added new Question:  $question','$id4','q')" or die(mysql_error()."query4");
		mysql_query($query4) or die(mysql_error()."query4");
		$msg="Question Added";
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
include_once("welcomeuse.php");
?></h2>
<a href="signout.php" >logout</a>
</div>
<?php
	include_once("menu.php");
	?>
</div>
<div class="admincontext">
<p class="admincontexttitle"> Add Question
</p>
<form class="moderatorform" name="form1" method="post">
<p style="text-align:center; padding:5px; margin:5px">
<?php
print "$msg";
?></p>

<span style="color:rgba(239,7,11,1.00);">*</span><input type="text" placeholder="Question" name="question" class="addformelement">
<br>
<span style="color:rgba(239,7,11,1.00);">*</span><textarea placeholder="Question Backgroung" name="qback" class="addformelement"></textarea>
<br>
<input type="submit" value="" name="submit" class="questionformbutton">

</form></div>
</div>
</body>
</html>
