<?php

	session_start(); //////////////////////////////////////////////////////////////////////////////

	$last_loc="tour_spot.php";
	 setcookie('lastPage',$last_loc,time()+1000,'/'); 
	 
	 if( isset($_REQUEST['id']) )
	 {
		 $id  = $_REQUEST['id'];
		 $nme = $_REQUEST['nme'];

	 }

	 if(isset($_COOKIE['Temp_id']))
	 {
	 	$id=$_COOKIE['Temp_id'];
	 	$nme=$_COOKIE['Temp_nme'];
	 }
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
		

	.body{
		
		
		border: 2px solid black;
		width: 1000px;
		margin-left: 12.5%;



		
	}

	#t1 td{
		width:1000px;
		height: 280px;
		border: 1px solid black;

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



	.hb{

		height: 25px;
		width: 150px;
		border-radius: 13px;
		background-color: blue;
		color: white;
		font-size: 18px;
		text-align: center;
		font-style: italic;
		margin-top: 10px;

		

	}
	.hb:hover{
		background-color: red;
	}



	.footer{
		background-color: gray;
		color: white;
		text-align: center;
	}

	#comment_box{

		width: 1000px;
		border:1px solid black;
		font-size: 22px;

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
			margin-top: -7px;
			margin-bottom: 8px;
		}

		#cont ul li:hover > ul li{	
			float: left;
			border-radius: 7px;
			margin-top: -7px;
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
<!-- div class main  -->
<body>
	<div class="main">


		<header class="header">
			<table>
				<tr>
					<td>
						<img src="../Model/Logo/tourlogo.png" height="48px" width="65px" style="margin-top: -2px;">
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
				echo 			"<a href='../Controlar/logout.php?id=".$_REQUEST['id']."&nme=".$_REQUEST['nme']."'><button type='button' name='logout_submit' >Log Out</button></a>";
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
		<div>
			<tr>
				<td>
				<select onchange="location=this.value" style="font-size:20px;border-radius: 15px;height: 45px;width:100%;border:1px solid black; text-align: center;">

					<option>Pick a Division to explore</option>
					<option value="sylhet.php">Sylhet</option>
					<option value="chittagong.php">Chittagong</option>
					<option value="dhaka.php">Dhaka</option>
					

				</select>
				</td>
			</tr>
			

			
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
			<?php

				$con = mysqli_connect('localhost','root','','guideme');
				//$id= $_REQUEST['id'];  upore assign kora hoise

				$query="SELECT * FROM tour_spot WHERE id= '$id' " ;
				$run =mysqli_query($con,$query);
				if ($run) {
					while ($data=mysqli_fetch_assoc($run)) {

			?>

			<div style="height: 50px;text-align: center;">

				<h1><?php echo $data['name'];?> </h1>
			</div>
			<div style="height: 400px;background-image: url(<?php echo "../Model/images/".$data['pic'];?>);">
				

			</div>
			<div style="text-align: left;font-size: 30px;">
				<br><b>Location:</b> <?php echo $data['location'];?> <br><br>
				<p >
					<?php echo $data['details'];?>
				</p>

				<br>
			

			</div>		


			    <?php } } ?>







			<!---------Start comment part------------>
			<h4 align="left" style="background-color: #b3cccc;color: white" >Comments</h4>
			<div id="comment_box">
				<br>

				<?php
					
					$query="SELECT * FROM comment WHERE name='$nme' ";
					$run =mysqli_query($con,$query);
					if ($run) {
						while ($data=mysqli_fetch_assoc($run)) {

				?>
							<tr>
								<td ><div  style="color: blue;"><?php echo $data['user_name']; ?></div></td><br>

							</tr>
							<tr>
								<td><?php echo $data['comment']; ?></td><br>

							</tr>
							<hr>
							
							<?php
						}
					}
					else
						echo "false";
				?>

				
			</div>
			<div id="hotel_button">
				
					<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
						<?php
							
					if (isset($_COOKIE['id'])) {
							?>
				
						<textarea rows="4" cols="60" name="comtxt"  placeholder="Write your opinion here......" >
								
							</textarea><br>
							<input type="submit" name="comment" value="Post">
							<br>
					<?php
						}
						
						$con = mysqli_connect('localhost','root','','guideme');
						//$id= $_REQUEST['id'];

						$query="SELECT * FROM tour_spot WHERE id= '$id' " ;
						$run =mysqli_query($con,$query);
						$data=mysqli_fetch_assoc($run);
							
						?>

					<?php echo "<a href='../View/hotel.php?area=". $data['area'] ."'>"   ;?>
							<div class="hb" >
								Hotels around
							</div>
						</a>
					

				</form>
			</div>
			
		</div>
		
			<!-------End comment part--------->
			<div class="footer">
				Copyright@
			</div>
		
		</div>	
	
</body>
</html>
<?php
	if(isset($_POST['comment']))
		{
			$comment =$_POST['comtxt'];
			$name =$data['name'] ;
			$con =mysqli_connect('localhost','root','','guideme');
			$query ="INSERT INTO comment VALUES ('','$name','$comment','".$_SESSION['uname']. "')";
			$run =mysqli_query($con,$query);
			if ($run) {
				header('location:../View/tour_spot.php');
			}
		}

?>