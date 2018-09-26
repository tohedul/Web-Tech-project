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
							<option value="index.php"> Tour Guide</option>
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

		<table>
			
			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="rvsl.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div >
								<h3>Rose View Hotel</h3><br><br>
								<b>Location:</b>House-21,Road-22,Block-D, Shahjalal Upashahar Main Rd, Sylhet 3100<br>
								<b>Standard:</b> 5 star<br>
								<b>Contact No:  0821-721835</b>
								<br>
								<br>
								<a href="https://rose-view-hotel.business.site/">Official website</a>
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>

			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="spsl.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div class="centered">
								<h3>Hotel Star Pacific</h3><br><br>
								<b>Location:</b>982, East Dargah Gate, Sylhet <br>
								<b>Standard:</b> 4 star<br>
								<b>Contact No:   0821-727945</b>
								<br>
								<br>
								<a href="http://www.hotelstarpacific.com/" target="_blank">Official website</a>
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>


			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="hssl.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div class="centered">
								<h3>Hotel Supreme</h3><br><br>
								<b>Location:</b> East Tamabil Road, Mira Bazar, Sylhet 3100 <br>
								<b>Standard:</b> 3 star<br>
								<b>Contact No: 01711-197012</b>
								<br>
								<br>
								<a href="http://www.hotelsupreme.net/">Official website</a>
						
								
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