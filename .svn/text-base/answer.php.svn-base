<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>World Sikh Parliament</title>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="js/myscript.js"> </script>
<script src="js/jquery.js"></script>
</head>
<?php 
include_once("connect.php");
$msg="";
$obj =new connections();

if(isset($_POST["submit"]))
{
	$uemail='';
	$uname='';
if (isset($_SESSION["uname"]))
		{
			$uemail = $_SESSION["uemail"];
			$uname = $_SESSION["uname"];
		}
		else if (isset($_SESSION["modname"]) and isset($_SESSION["modemail"]))
		{
			$uemail = $_SESSION["modemail"];
			$uname = $_SESSION["modname"];
		}
print $uname;
	print $uemail;
if( !empty($_POST["comment"]))

{
	$comment=$_POST["comment"];
	$qid = $_SESSION["qid"];
	
		$query2="select uid,type from user where uemail='$uemail'" ;
		$result2=mysql_query($query2) ;
		$ans2=mysql_fetch_array($result2) ;
		$id = $ans2[0];
		$t = $ans2[1];
		print $t;
		print $id;
		/*if($t == 'm')
		{
			print "here";
		$query3="insert  into feedback(uid, qid, comment,status) values('$id','$qid','$comment','a')" or die(mysql_error()."query3");
		}
		else
		{
			$query3="insert  into feedback(uid, qid, comment, status) values('$id','$qid','$comment','n')" or die(mysql_error()."query3");
		}
		mysql_query($query3) or die(mysql_error()."query3");
		
		$query4="insert  into adminnotification(message, src,type) values('$uname added new comment','$qid','q')" or die(mysql_error()."query4");
		mysql_query($query4) or die(mysql_error()."query4");
		$query8="select mid, quest from questmod qm, question q where qm.qid = q.qid and qm.qid = $qid" ;
		$result8=mysql_query($query8) ;
		$ans8=mysql_fetch_array($result8) ;
		$id8 = $ans8[0];
		$ques8 = $ans8[1];
		$query9="insert  into moderatnotification (mid,message, src) values($id8,'New comment on $ques8',$qid)" or die(mysql_error()."query9");
				mysql_query($query9) or die(mysql_error()."query9");
		$msg="Comment added";*/
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
    include_once("menu.php")
    ?>
</div>
<div class='context'>
<?php
if(isset($_GET["qid"]))
{
	$qid = $_GET["qid"]; 
	$_SESSION["qid"] = $qid;
$query1="select qid,quest,background,poston,uname from question q, user u where q.uid = u.uid and q.qid = $qid" ;
		$result1=mysql_query($query1) ;
		$ans1=mysql_fetch_array($result1);
				print "";
				print "<p class='contexttitle'> $ans1[1]
			</p>";
			print "<p class='contextdetial'>
			$ans1[4] | $ans1[3]
			</p>";
			print "<p class='contextbody'>$ans1[2]</p>";
			

if(isset($_SESSION["admin"]) and !isset($_SESSION["modname"]) and !isset($_SESSION["uname"]))
{
	if(isset($_POST["assignmod"]))
		{
			$mid = $_POST["mod"];
			$query6 = "insert into questmod (qid,mid) values ($qid,$mid)"  or die(mysql_error()."query6");
				mysql_query($query6) or die(mysql_error()."query6");
				$query4="insert  into moderatnotification (mid,message, src) values($mid,'New question assigned to you',$qid)" or die(mysql_error()."query4");
				mysql_query($query4) or die(mysql_error()."query4");
				print "<p align='center' style=' color: red;' id='hide'>Moderator Assigned</p>";
		}
		
		$query7 = "select qid from questmod where qid = $qid" or die(mysql_error()."Query7");
		$result7 =  mysql_query($query7) or die(mysql_error()."query7");
		$row7 = mysql_num_rows($result7);
		
		if($row7 == 0)
		{
	print "<form method='post' name='assign'>
Assign Moderator: <select name='mod'> ";
	$query2="select uid,uname from user where type = 'm' order by uname" ;
		$result2=mysql_query($query2) ;
		$row = mysql_num_rows($result2);
		
		if($row > 0)
		{
			while ($ans2=mysql_fetch_array($result2))
			{
				print "<option value='$ans2[0]'>$ans2[1]</option>";
			}
		}
	
		print "</select>
<input type='submit' value='Assign Moderator' name='assignmod'>
</form>";
		}
}

	$query2="select comment,poston,uname,status,fid from feedback f, user u where f.uid = u.uid and f.qid = $qid order by poston desc" ;
		$result2=mysql_query($query2) ;
		$row = mysql_num_rows($result2);
		$row10 = 0;
		if(isset ($_SESSION["modid"]))
		{
		$mid =$_SESSION["modid"];
		$query10 = "select * from questmod where qid = $qid and mid = $mid" or die(mysql_error()."Query10");
		$result10 =  mysql_query($query10) or die(mysql_error()."query10");
		$row10 = mysql_num_rows($result10);
		}
		if($row > 0)
		{
			while ($ans2=mysql_fetch_array($result2))
			{
				if($ans2[3] === 'n' and isset($_SESSION["modname"]) and $row10 === 1 )
				{			
					
				print "<div class='feedcontext'><p class = 'feeduser'>$ans2[2] </p>
				<p class='feeddate'>$ans2[1]</p>
				<p class='feedcomment'>$ans2[0]<p>
				<a href='approve.php?fid=$ans2[4]&qid=$qid'>Approve</a>
				<a href='deletefeed.php?fid=$ans2[4]&qid=$qid'>delete</a>
				</div>
				<hr>";
				}
				else if($ans2[3] == 'a')
				{
					print "<div class='feedcontext'><p class = 'feeduser'>$ans2[2] </p>
				<p class='feeddate'>$ans2[1]</p>
				<p class='feedcomment'>$ans2[0]<p></div>
				";	
				}
				
			}
		}

		
}
?>
<div class="clear"></div>



<form class="addform" name="form1" method="post">
<p style="text-align:center; padding:5px; margin:5px">

<?php
print "$msg";
?></p>
<?php
if(isset($_SESSION["uname"]))
{
	$uname= $_SESSION["uname"];
	print $uname;
}
?>

<textarea placeholder="Comment" name="comment" class="addformelement"></textarea>
<br>
<input type="submit" value="" name="submit" class="commentformbutton">

</form>
</div>
</body>
</html>
