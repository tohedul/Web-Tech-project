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
					<td>
						<select onchange="location=this.value;" style="text-align: center;font-size: 18px;border-radius: 5px;">
							<option value="tour_home.php"> Tour Guide</option>
							<option value="edu.php">Educational Guide</option>
							<option value="medical.php">Medical Guide</option>
						</select>
						
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

			<h1>Ratargul swamp forest</h1>
		</div>
		<div style="height: 400px;background-image: url(ratargull.jpg);">
			

		</div>
		<div style="text-align: left;font-size: 30px;">
			<br><b>Location:</b>  Sylhet, Bangladesh<br><br>
			<p >
			Ratargul Swamp Forest is a freshwater swamp forest located in Gowain River, Fatehpur Union, Gowainghat, Sylhet, Bangladesh. It is the only swamp forest located in Bangladesh and one of the few freshwater swamp forest in the world. The forest is naturally conserved under the Department of Forestry, Govt. of Bangladesh.Its area is 3, 325.61 acre including 504 acre declared as the animal sanctuary in 1973. It is known as the Amazon of Bangla and Sundarbans of Sylhet. This only swamp forest in Bangladesh is located 26 km far from Sylhet. The forest's name comes from the word, "Rata" or "Pati" tree, used by the locals of Sylhet.The evergreen forest is situated by the river Goain and linked with the channel Chengir Khal. 
			</p>

		
			<br>
		<!---------Start comment part------------>
		<h4 align="left" style="background-color: #b3cccc;color: white" >Comments</h4>
	<div id="comment_box">
		<br>

		<?php
			$con = mysqli_connect('localhost','root','','guideme');
			$query="SELECT * FROM comment WHERE name='ratargul'";
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
			<input type="submit" name="comment_ratargul" value="Post">
			<br>
			<a href="hotelsl.php">
					<div class="hb" >
						Hotels around
					</div>
				</a>
			<br>

		</form>
	</div>
		
	</div>

	</div>
	
	<!-------End comment part--------->
	

	<div class="footer">
		Copyright@
	</div>
	

	</div>

</body>
</html>