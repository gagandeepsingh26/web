<?php
session_start();
/*include_once("rec.php");
*/class connections
{

	public $msg,$connect;
	function __construct()
	{
	$this->connect=mysql_connect("localhost","suneetsingh","tvuRfxa9RZsCPCGC");
	mysql_select_db("sk15db");
	}
	function __destruct()
	{
	mysql_close($this->connect);
	}
	function login($a,$b)
	{
		
		if(!isset($_SESSION["modname"]) and !isset($_SESSION["uname"]) and !isset($_SESSION["admin"]))
		{
		$query1="select * from admin where admin='$a' and password='$b'" ;
		$result1=mysql_query($query1) ;
		$ans1=mysql_fetch_array($result1) ;
		
		$query2="select uemail,uname,uid,login from user where uemail='$a' and upassword='$b' and type = 'm'" ;
		$result2=mysql_query($query2) ;
		$ans2=mysql_fetch_array($result2) ;	
		
		if(!empty($ans1[0]))
		{
			$_SESSION["admin"]=$ans1[0];
			header("location:adminpanel.php");
		}
		else if (!empty($ans2[0]))
		{
			$_SESSION["modname"] = $ans2[1];
			$_SESSION["modmail"] = $ans2[0];
			$_SESSION["modid"] = $ans2[2];
				if($ans2[3] == 0)
				{
					header("location:resetpassword.php");			
				}
				else
				{
					header("location:moderatpanel.php");
				}
		}
		else
		{
			print "<table width='961' align='center' style='border:#ffff66 ridge'><tr> <td align='center' class='style6'> Wrong Username/Password </td></tr> </table>";
		}
		
	}
	}
}
?>
