<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>World Sikh Parliament</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<?php
include_once("connect.php");
$msg="";
$obj =new connections();
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
    include_once("menu.php")
    ?>
</div>
<?php
$query1="select qid,quest,background,poston,uname from question q, user u where q.uid = u.uid order by qid desc" ;
		$result1=mysql_query($query1) ;
		$row=mysql_num_rows($result1);
		if($row > 0)
		{
			while ($ans1=mysql_fetch_array($result1))
			{
				print "<div class='context'>";
				print "<p class='contexttitle'> $ans1[1]
			</p>";
			print "<p class='contextdetial'>
			$ans1[4] | $ans1[3]
			</p>";
			print "<p class='contextbody'>$ans1[2]</p>";

			print "<a class='contextbutton' href='answer.php?qid=$ans1[0]'> </a></div>";
			}
		}
?>


</body>
</html>
