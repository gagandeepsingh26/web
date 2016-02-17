<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Moderator</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
setTimeout(function() {
    $('#hide').fadeOut('fast');
}, 1000);
</script>

</head>

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

include_once("../connect.php");
$obj=new connections();
include_once("welcome.php");
?></h2>
<a href="signout.php" >logout</a>
</div>

	<?php
	include_once("../menu.php");
	?>
</div>
<div class="admincontext">
<p class="admincontexttitle"> Moderator
</p>
<h1>Updates</h1>
<p id="hide" style="text-align:center; font-size:14px; color:rgba(233,7,10,1.00);"> <?php
	if(isset($_GET['msg']))
	{
		print $_GET["msg"];
		
	}
?>
</p>
<?php
		if(isset($_GET["mid"]))
		{
			$mid = $_GET["mid"];
			$_SESSION["mid"] = $mid;
		$query2="select  uname,uphone,ucity,ucountry,ugender,ubrief from user where uid = $mid and type = 'm'"  ;
		$result2=mysql_query($query2) ;
		while ($ans2=mysql_fetch_array($result2))
		{
				print "<form name='edit' class='editmodform' action='update.php' method='post'>
						<p>Name : </p><input type=text class='editmodelement' name='mname'  value= '$ans2[0]'><br>
						<div class='clear'></div>
						<p>Phone : </p><input type=text class='editmodelement' name='mphone'  value= '$ans2[1]'><br>
						<div class='clear'></div>
						<p>city : </p><input type=text class='editmodelement' name = 'mcity'  value= '$ans2[2]'><br>
						<div class='clear'></div>
						<p>country : </p><input type=text class='editmodelement' name = 'mcountry'  value= '$ans2[3]'><br>
						<div class='clear'></div>
						<p>brief : </p><textarea name='mbrief' class='editmodelement'>$ans2[5]</textarea><br>
						<div class='clear'></div><br>
						<a href='delete.php?mid=$mid' class='editformbutton'></a>
						<input type='submit' name='submit' value='' class='updateformbutton'>
						</form>";
		}
		
 }

?>

</div>
</div>
</body>
</html>
