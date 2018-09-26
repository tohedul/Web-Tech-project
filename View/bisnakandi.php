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

					<option value="sylhet.php">Sylhet</option>
					<option value="chittagong.php">Chittagong</option>
					<option value="dhaka.php">Dhaka</option>
					

				</select>
				</td>
			</tr>
			

			
		</div>



	<div class="body" >
		<div style="height: 50px;text-align: center;">

			<h1>Bisnakandi</h1>
		</div>
		<div style="height: 400px;background-image: url(bisnakandil.jpg);">
			

		</div>
		<div style="text-align: left;font-size: 30px;">
			<br><b>Location:</b>  Sylhet, Bangladesh<br><br>
			<p >
			Bisnakandi is a different flavor of natural beauty in the country, a border village in north Gowainghat Upazila in Sylhet. Gowainghat was, nestled between the Meghalaya hills (INDIA) and the plains of Sylhet. This is where many layers of the Khasi mountain meet at a single point from both sides. You will find various kinds of stones over which water flows. Rainy season is the best time to visit the site. Water flowing over the stones gives a unique look. In the rainy season, the site looks spectacular. The dark clouds hug the mountains in the rainy season. Winter is not the suitable time to visit the site. In winter, there will be a lot of stone-laden boats, Lorries, and mechanized mining. So, everyone should make the plan to visit the site in the rainy season.

			</p>

			<br>
		
		<!---------Start comment part------------>
		<h4 align="left" style="background-color: #b3cccc;color: white" >Comments</h4>
	<div id="comment_box">
		<br>

		<?php
			$con = mysqli_connect('localhost','root','','guideme');
			$query="SELECT * FROM comment WHERE name='bisnakandi'";
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
			<input type="submit" name="comment_bisnakandi" value="Post">
			<br>
			<a href="hotelsl.php">
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