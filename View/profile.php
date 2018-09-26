<?php
	session_start();
	/*if(isset($_SESSION['uname']))
	{
		echo "";
	}
	else
	{
		header('Location:tour_home.php');
	}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tour Guide</title>
	<style>

		.main{
				height: 1000px;
		}
		.header{
			text-align: center;
			height: 57px;
			
			background-color: #ccd6e8;
			
		}
		.menu{
			
			border-radius: 2px;
			height: 40px;
			text-align: center;
		}
		
		*{
			margin: 0;
		}
		a:link {
    text-decoration: none;
}


.slide-nav{
	height: 100%;
	width: 0;
	position: fixed;
	z-index: 1;
	top: 0;
	left: 0;
	background-color: #111;
	opacity: 0.9;
	overflow-x:hidden;
	padding-top: 60px;
	transition: 0.5s;
}

.slide-nav a
{
padding: 10px 10px 10px 30px;
text-align: left;
text-decoration: none;
font-size: 22px;
color: #ccc;
display: block;
transition: .2s;
}

.slide-nav a:hover
{
	color: #fff;
}

.slide-nav .btn-close{
	position: absolute;
	top:0;
	right: 22px;
	font-size: 36px;
	margin-left:50px;
}
		
.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}




	#t1 td{
		width: 330px;
		height: 280px;
		border: .2px solid black;

	}

	#t1 td a div img{
		opacity: .5;
	}

	#t1 td a div img:hover{
		opacity: 1;
	}

	#t1 td div a img{
		opacity: .5;
	}

	#t1 td div a img:hover{
		opacity: 1;
	}

	.body{
		
		
		border: 2px solid black;
		height: 1000px;
		width: 1000px;
		margin-left: 15%;



		
	}

	.footer{
		background-color: gray;
		color: white;
		text-align: center;
	}


	    #cont ul{
			list-style: none;
		}

		#cont ul li{
			background-color:#aaa;
			height: 50px;
			width: 170px;
			line-height: 50px;
			border: 1px solid white;	
			text-align: center;
			color: white;
			font-family: cursive;
			float: left;
			border-radius: 7px;
			margin-bottom: 8px;
		}

		#cont ul ul{
			display: none;
		}


		#cont ul li:hover > ul{
			display: block;
			padding: 0px;
			height: 0px;
			margin-left: 171px;
			margin-top: -51px;

		}

		#cont ul li:hover > ul li:hover {
			background-color: #acabcc;
			margin-top: 0px;
			padding: 0px;
			margin-top: 1px;
			margin-bottom: 0px;
		}

		#cont ul li:hover > ul li{	
			float: left;
			border-radius: 7px;
			margin-top: 1px;
			margin-bottom: 0px;
		}
		#cont ul li:hover > ul li a{
			font-family: cursive;
			text-decoration: none;
			padding: 0px 10px;
		}



		.main #ddL{
			padding-left: 300px; 
			padding-right: 400px;
		}

	

	</style>



</head>

<!--------------------Body--------------------------------------------------->
<body>
	<div class="main">


		<header class="header">
			<table>
				<tr>
					<td>
						<img src="../Model/Logo/tourlogo.png" height="48px" width="65px" style="margin-top:-7px;">
					</td>
					<td>
						<label><a href="tour_home.php">GuideMe.com</a></label>
					</td>
					<td id="ddL">
						<div  id="cont" >
		
							<ul>
								<li > <a href="tour_home.php"><img style="margin-top:0px; margin-left: -5px;" src="../Model/Logo/tourLgo.png"></a>        
									<ul>
										<li > <a href="medical.php"><img style="margin-top:0px;margin-left: -5px;" src="../Model/Logo/mediLgo.png"></a> </li>
										<li > <a href="edu.php"> <img style="margin-top:0px;margin-left: -3px;" src="../Model/Logo/eduLgo.png"></a> </li>					
									</ul>	
								</li>	
							</ul>
						</div>
					</td>
					

				</tr>
			</table>
			
		</header>

<!--///////////////////////////////////////////// Log In //////////////////////////////////////////// -->		

		<div style="text-align: right;background-color: #4f87e2;height: 55px;">
			
			<?php
			
			if(isset($_COOKIE['id']))
			{
				
				
				echo 	"<table align ='right'>";
				echo 		"<tr>";
				echo 			"<td>";
				echo 				"<p>Logged in as "."<font color='white' size='4'>".$_COOKIE['uname']."</font>"."</p> ";
				echo 			"</td>";
				echo 		"</tr>";
				echo 		"<tr>";
				echo 			"<td>";
				echo 			"<a href='../Controlar/logout.php'><button type='button' name='logout_submit' >Log Out</button></a>";
				echo 			"</td>";
				echo 		"</tr>";
				echo 	"</table>";

				
				echo  "<div style='text-align: left;'>";
				echo					"<span class='open-slide'>";
    			echo						"<a href='#' onclick='openSlideMenu()'>";
    			echo						"<svg width='30' hight='30'>";
    			echo							"<path d='M5,20 30,20' stroke='#000' stroke-width='5'/>";		
    			echo							"<path d='M5,29 30,29' stroke='#000' stroke-width='5'/>";	
    			echo							"<path d='M5,38 30,38' stroke='#000' stroke-width='5'/>";					
    			echo						"</svg>";	
    			echo						"</a>";
    			echo					"</span>";
    			echo  "</div>";
    			echo     "<div id='slide-menu' class='slide-nav'>";
    			echo 		"<a href='#' class = 'btn-close' onclick='closeSlideMenu()'>&times;</a>";
    			echo		"<a href='profile.php'>My Profile</a>";
    			echo		"<a href='tour_story.php'>My Travel Story</a>";

    			if ($_COOKIE['utype']=='admin') {
    				$_SESSION['yesAdmin']='1';

    				echo 		" <a href='admin.php'>Admin panel</a>"; 
    			}	   			
  				echo	  "</div >";
				
  				

			}
			else
			{
				

				echo "<table align='right'>";
				echo "<form method='post' action='../Controlar/login.php'>";
				echo	"<tr>";
				echo		"<td>";
				echo			"<input type='text' name='uname' placeholder='username'>";
				echo		"</td>";
				echo		"<td>";
				echo			"<input type='password' name='password' placeholder='password'>";
				echo		"</td>";
				echo	"</tr>";
				echo	"<tr>";
				echo		"<td colspan='2'>";
				echo      		"<table align='right'>";
				echo 				"<tr>";
				echo 				  	"<th>";
				echo 					  	 "<input type='submit' name='login_submit' value='Log in'>";
				echo 				 	 "</th>";
				echo 				 	 "<th>";
				echo						 "<input type='submit' name='signup_submit'  value='Sign Up'>";
				echo 				 	 "</th>";
				echo				"</tr>";
				echo           "</table>";				
				echo		"</td>";
				echo	"</tr>";

				echo	"</form>";
				echo"</table>";
				
			}
			?> 
<!--//////////////////////////////////////////// ----- /////////////////////////////////////////////-->


		</div>
		
		

		<script>
			function openSlideMenu()
    	{
    		document.getElementById('slide-menu').style.width = '250px';
    		document.getElementById('main').style.marginLeft = '250px';
    	}

		function closeSlideMenu()
    	{
    		document.getElementById('slide-menu').style.width = '0px';
    		document.getElementById('main').style.marginLeft = '0px';
    	}

		</script>

	<div class="body" >
		

			
			<div align="center"   style="height: 50px;margin-left: 15%; text-align: center; font-size: 25px;" >
				<br><h1 style="color: #2ba3db;">Profile</h1>
				<table  border="1px" align="center">
					<tr>
						<td><b>Name: </b></td><br>
						<td><?php echo $_COOKIE['name']; ?> </td>
						
						
					</tr>
					<tr>
						<td><b>Email: </b></td><br>
						<td><?php echo $_COOKIE['email']; ?> </td>												
					</tr>
					<tr>
						<td><b>Dob: </b></td><br>
						<td><?php echo $_COOKIE['dob']; ?> </td>
					</tr>
					
				</table>
			</div>


		
	</div>

	<div class="footer">
		Copyright@
	</div>
	

	</div>

</body>
</html>