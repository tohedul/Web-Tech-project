<?php
	session_start();	
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
		
		
		border: 2px solid black;
		width: 1000px;
		margin-left: 25%;



		
	}

	#t1 td{
		width:1000px;
		height: 280px;
		border: 1px solid black;

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
			<table align="right">
				<form method="post" action="">
				<tr>
					<td>
						<input type="text" name="name" placeholder="username">
					</td>
					<td>
						<input type="password" name="" placeholder="password">
					</td>
				</tr>
				<tr>
					<td colspan="3" >
						<input type="submit" name="login_submit" value="Log in">
					</td>
				</tr>

				</form>
			</table>
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
		<div style="height: 50px;text-align: center;">

			<h1>Cox's bazar Beach</h1>
		</div>
		<div style="height: 400px;background-image: url(coxl.jpg);">
			

		</div>
		<div style="text-align: left;font-size: 30px;">
			<br><b>Location:</b>  Cox's bazar, Chittagong, Bangladesh<br><br>
			<p >
			Cox's Bazar Beach, located at Cox's Bazar, Bangladesh, is the longest unbroken sea beach in the world, running 120 kilometres (75 mi). It is the top tourist destination of Bangladesh.
			At high tide the beach is 200 metres (660 ft) wide and at low tide it is 400 metres (1,300 ft) wide on average. Quicksandis a danger during ebb tide

			</p>

			<br>
		
		<!---------Start comment part------------>
		<h4 align="left" style="background-color: #b3cccc;color: white" >Comments</h4>
	<div id="comment_box">
		<br>

		<?php
			$con = mysqli_connect('localhost','root','','guideme');
			$query="SELECT * FROM comment WHERE name='cox'";
			$run =mysqli_query($con,$query);
			if ($run) {
				while ($data=mysqli_fetch_assoc($run)) {

					?>
					<tr>
						<td><?php echo $data['user_name']; ?></td><br>

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
	<div >
		<form action="database.php" 
		method="post">
			<textarea rows="4" cols="60" name="comtxt"  placeholder="Write your opinion here......" >

				
			</textarea><br>
			<input type="submit" name="comment_cox" value="Post">
			<br>
			<a href="hotelcox.php">
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