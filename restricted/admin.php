<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="js/myscript.js"> </script>
<script src="js/jquery.js"></script>
</head>
<?php 
session_start();
if(!isset($_SESSION["admin"]))
{
$message="Restricted Area";
header("location:signin.php?msg=".$message);
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
	<div id="navigation"><ul>
				<li><a class="selected" href="index.html" >Home</a></li>
                <hr size="0.5" color="#137FF1" style="margin-top:-1px;">
				<li><a href="question.html" >Question</a></li>
                <hr size="0.5" color="#137FF1" style="margin-top:-1px;">
                <li><a href="addquestion.html" >Add Question</a></li>
                <hr size="0.5" color="#137FF1" style="margin-top:-1px;">
				<li><a href="bio.html" >Bio</a></li>
                <hr size="0.5" color="#137FF1" style="margin-top:-1px;">
				<li><a href="history.html" >History</a></li>
                <hr size="0.5" color="#137FF1" style="margin-top:-1px;">
                <li><a href="get.html" >How we get here</a></li>
                <hr size="0.5" color="#137FF1" style="margin-top:-1px;">
                <li><a href="ContactUs.html" >Contact Us</a></li>
				
			</ul></div>
</div>
<div class="context">
<p class="contexttitle"> This is space for question1
</p>
<p class="contextdetial">
date | Author
</p>
<p class="contextbody"> A bit backgroud of this question it will contain few words if we increase that limit then it will show up with read more icon. A bit backgroud of this question it will contain few words if we increase that limit then it will show up with read more icon.</p>
<form> <button class="contextbutton" type="button" id="b1" > </button></form>
</div>

<div class="context">
<p class="contexttitle"> This is space for question1
</p>
<p class="contextdetial">
date | Author
</p>
<p class="contextbody"> A bit backgroud of this question it will contain few words if we increase that limit then it will show up with read more icon. A bit backgroud of this question it will contain few words if we increase that limit then it will show up with read more icon.</p>
<form> <button class="contextbutton" type="button" > </button></form>
</div>

<div class="context">
<p class="contexttitle"> This is space for question1
</p>
<p class="contextdetial">
date | Author
</p>
<p class="contextbody"> A bit backgroud of this question it will contain few words if we increase that limit then it will show up with read more icon. A bit backgroud of this question it will contain few words if we increase that limit then it will show up with read more icon.</p>
<form> <button class="contextbutton" type="button" > </button></form>
</div>
</div>
</body>
</html>
