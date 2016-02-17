<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
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
<p class="admincontexttitle"> Admin Panel
</p>
<h1>Updates</h1>
<p id="hide" style="text-align:center; font-size:14px; color:rgba(233,7,10,1.00);"> <?php
	if(isset($_SESSION['message']))
	{
		print $_SESSION["message"];
		unset($_SESSION["message"]);
	}
?>
</p>
<?php

		$query2="select * from adminnotification where deleted = 0 order by nid desc" ;
		$result2=mysql_query($query2) ;
		$row=mysql_num_rows($result2);
		if($row > 0)
		{
			while ($ans2=mysql_fetch_array($result2))
			{
				$t = $ans2[6];
				if($t == 'm')
				{
				print "<p class='admincontextbody'><a href='moderator.php?mid=$ans2[2]'>$ans2[1] at $ans2[3]<a href = 'deletenotification.php?nid=$ans2[0]'> <img src='images/icon/Delete_Icon.png'></a></p>";
				}
				else if($t == 'q')
				{
					print "<p class='admincontextbody'><a href='../answer.php?qid=$ans2[2]'>$ans2[1] at $ans2[3]<a href = 'deletenotification.php?nid=$ans2[0]'> <img src='images/icon/Delete_Icon.png'></a></p>";	
				}
				else if($t == 'e')
				{
					print "<p class='admincontextbody'><a href='#'>$ans2[1] at $ans2[3]<a href = 'deletenotification.php?nid=$ans2[0]'> <img src='images/icon/Delete_Icon.png'></a></p>";	
				}
			}
		}

?>


</div>
</div>
</body>
</html>
