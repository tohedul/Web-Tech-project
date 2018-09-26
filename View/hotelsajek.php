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
			height: 56px;
			
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

		<table>
			
			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="mms.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div >
								<h3>Megh Machang Sajek</h3><br><br>
								<b>Location: </b>Sajek 4410 <br>
								<b>Contact No: 01676-449046</b>
								<br>
								<br>
								
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>

			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="aec.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div class="centered">
								<h3>Abakash Eco Cottage Sajek</h3><br><br>
								<b>Location: </b>Ruilui Para, Sajek Valley, Baghaichari Upazila, Chittagong<br>
								<b>Contact No: 01844-172492</b>
								<br>
								<br>
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>


			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="shv.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div class="centered">
								<h3>Sajek Hill View Resort</h3><br><br>
								<b>Location: </b>Sajek<br>
								<b>Contact No: 01878-745843</b>
								<br>
								<br>
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>

		</table>


		
	</div>

	<div class="footer">
		Copyright@
	</div>
	

	</div>

</body>
</html>