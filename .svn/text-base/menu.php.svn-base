<?php
$page =  basename($_SERVER['PHP_SELF']);
if(!isset($_SESSION["admin"]) and !isset($_SESSION["modname"]))
{
	print "<div id='navigation'><ul>
				<li><a";if ($page == 'index.php'){ print  " class='selected' style='border-top-left-radius:10px; border-top-right-radius:10px;'";}print " href='index.php'>Question</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'addquestion.php'){ print  " class='selected'";}print " href='addquestion.php' >Add Question</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='bio.html' >Bio</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='history.html' >History</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='get.html' >How we get here</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='ContactUs.html' >Contact Us</a></li>
				
			</ul></div>";
}
else if (!isset($_SESSION["uname"]) and !isset($_SESSION["modname"])) 
{
 if ($page == 'answer.php')
	{
print "<div id='navigation'><ul>
				<li><a";if ($page == 'adminpanel.php'){ print  " class='selected' style='border-top-left-radius:10px; border-top-right-radius:10px;'";}print " href='restricted/adminpanel.php' >Admin Panel</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a";if ($page == 'addmoderator.php'){ print  " class='selected'";}print " href='restricted/addmoderator.php' >Add Moderator</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='bio.html' >Bio</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='history.html' >History</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='get.html' >How we get here</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='ContactUs.html' >Contact Us</a></li>
				
			</ul></div>";
	}
	 else
            {
				
				print "<div id='navigation'><ul>
				<li><a";if ($page == 'adminpanel.php'){ print  " class='selected' style='border-top-left-radius:10px; border-top-right-radius:10px;'";}print " href='adminpanel.php' >Admin Panel</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a";if ($page == 'addmoderator.php'){ print  " class='selected'";}print " href='addmoderator.php' >Add Moderator</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='bio.html' >Bio</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='history.html' >History</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='get.html' >How we get here</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='ContactUs.html' >Contact Us</a></li>
				
			</ul></div>";			
            }
}
//MODERATOR
else if (!isset($_SESSION["uname"]) and !isset($_SESSION["admin"])) 
{
	if ($page == 'addquestion.php')
	{
print "<div id='navigation'><ul>
				<li><a";if ($page == 'moderatpanel.php'){ print  " class='selected' style='border-top-left-radius:10px; border-top-right-radius:10px;'";}print " href='restricted/moderatpanel.php' >Moderate Panel</a></li>
				   <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'index.php'){ print  " class='selected'";}print " href='index.php' >Question</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'addquestion.php'){ print  " class='selected'";}print " href='addquestion.php' >Add Question</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='bio.html' >Bio</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='history.html' >History</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='get.html' >How we get here</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='ContactUs.html' >Contact Us</a></li>
				
			</ul></div>";
	}
	
	else if ($page == 'answer.php')
	{
print "<div id='navigation'><ul>
				<li><a";if ($page == 'moderatpanel.php'){ print  " class='selected' style='border-top-left-radius:10px; border-top-right-radius:10px;'";}print " href='restricted/moderatpanel.php' >Admin Panel</a></li>
				     <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'index.php'){ print  " class='selected'";}print " href='../index.php' >Question</a></li>
		             <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'addquestion.php'){ print  " class='selected'";}print " href='addquestion.php' >Add Question</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='bio.html' >Bio</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='history.html' >History</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='get.html' >How we get here</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='ContactUs.html' >Contact Us</a></li>
				
			</ul></div>";
	}
	else if ($page == 'index.php')
	{
print "<div id='navigation'><ul>
				<li><a";if ($page == 'moderatpanel.php'){ print  " class='selected' style='border-top-left-radius:10px; border-top-right-radius:10px;'";}print " href='restricted/moderatpanel.php' >Moderate Panel</a></li>
				     <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'index.php'){ print  " class='selected'";}print " href='index.php' >Question</a></li>
		             <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'addquestion.php'){ print  " class='selected'";}print " href='addquestion.php' >Add Question</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='bio.html' >Bio</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='history.html' >History</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='get.html' >How we get here</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='ContactUs.html' >Contact Us</a></li>
				
			</ul></div>";
	}
	 else
            {
				
				print "<div id='navigation'><ul>
				<li><a";if ($page == 'moderatpanel.php'){ print  " class='selected' style='border-top-left-radius:10px; border-top-right-radius:10px;'";}print " href='moderatpanel.php' >Moderate Panel</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'index.php'){ print  " class='selected'";}print " href='../index.php' >Question</a></li>
				<hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a";if ($page == 'addquestion.php'){ print  " class='selected'";}print " href='../addquestion.php' >Add Question</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='bio.html' >Bio</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
				<li><a href='history.html' >History</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='get.html' >How we get here</a></li>
                <hr size='0.5' color='#137FF1' style='margin-top:-1px;'>
                <li><a href='ContactUs.html' >Contact Us</a></li>
				
			</ul></div>";			
            }
}
			?>
			
            
           
            
            }