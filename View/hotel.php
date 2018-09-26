<?php

	session_start(); //////////////////////////////////////////////////////////////////////////////

	$last_loc="hotel.php";
	 setcookie('lastPage',$last_loc,time()+1000,'/'); 
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
			height: 52px;
			
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
		

	.body{
		text-align: center;
		border: 2px solid black;
		width: 1000px;
		margin-left: 24%;	



		
	}

	#im{
		width:650px;
		height: 280px;
		border: 1px solid black;
		border-right: none;
		border-radius: 3px;

	}

	#tx{

		width:350px;
		height: 280px;
		border: 1px solid black;
		border-radius: 3px;
		border-left: none;

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
			margin-top: -8px;
			padding: 0px;
		}

		#cont ul li:hover > ul li{	
			float: left;
			margin-top: -8px;
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
						<img src="tourlogo.png" height="48px" width="65px">
					</td>
					<td>
						<label>GuideMe.com</label>
					</td>
					<td id="ddL">
						<div  id="cont" >
		
							<ul>
								<li > <a href="tour_home.php"><img style="margin-top:10px; margin-left: -5px;" src="../Model/Logo/tourLgo.png"></a>        
									<ul>
										<li > <a href="medical.php"><img style="margin-top:10px;margin-left: -5px;" src="../Model/Logo/mediLgo.png"></a> </li>
										<li > <a href="edu.php"> <img style="margin-top:10px;margin-left: -3px;" src="../Model/Logo/eduLgo.png"></a> </li>					
									</ul>	
								</li>	
							</ul>
						</div>
					</td>
					
					

				</tr>
			</table>
			
		</header>


		<div style="text-align: right;background-color: #4f87e2;height: 55px;">
			
			<?php
			////////////////////////////////////////////////////////// Log in /////////////////////////////////////////
			if(isset($_SESSION['uid']))
			{
				
				
				echo 	"<table align ='right'>";
				echo 		"<tr>";
				echo 			"<td>";
				echo 				"<p>Logged in as "."<font color='white' size='4'>".$_SESSION['uname']."</font>"."</p> ";
				echo 			"</td>";
				echo 		"</tr>";
				echo 		"<tr>";
				echo 			"<td>";
				echo 			"<a href='../Controlar/logout.php'><button type='button' name='logout_submit' onclick='".session_destroy()."'>Log Out</button></a>";
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

    			if ($_SESSION['utype']=='admin') {
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
		<div>
			<tr>
				<td>
				<select onchange="location=this.value" style="font-size:20px;border-radius: 15px;height: 45px;width:100%;border:1px solid black; text-align: center;">

					
					<option value="chittagong.php">Chittagong</option>
					<option value="dhaka.php">Dhaka</option>
					<option value="sylhet.php">Sylhet</option>

				</select>
				</td>
			</tr>
			

			
		</div>



	<div class="body" >




<table>

			<?php
			$con = mysqli_connect('localhost','root','','guideme');
			$query="SELECT * FROM hotel WHERE area='".$_REQUEST['area']." ' ";
			$run =mysqli_query($con,$query);
			if ($run) {
				while ($data=mysqli_fetch_assoc($run)) {


					?>
					

					<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<?php echo "<img src='../Model/images/". $data['img']." '>" ; ?>
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div >
								<h3><?php echo $data['name'];  ?></h3><br><br>
								<b>Location:</b><?php echo $data['location'];  ?><br>
								<b>Standard:</b> <?php echo $data['standard'];  ?><br>
								<b>Contact No:</b><?php echo $data['phone_no'];  ?>
								<br>
								<br>
								<a href="<?php echo $data['website'];  ?>" target="_blank">Official website</a>
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>
					
					<?php
				}
			}
			
					

			?>
			

		</table>







		
	</div>

	<div class="footer">
		Copyright@
	</div>
	

	</div>

</body>
</html>