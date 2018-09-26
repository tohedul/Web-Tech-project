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

					<option value="dhaka.php">Dhaka</option>
					<option value="chittagong.php">Chittagong</option>
					
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
								<img src="lmdk.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div >
								<h3>Le Meridien Dhaka</h3><br><br>
								<b>Location:</b> 79/A Commercial Area, Airport Road, Nikunja 2, Khilkhet, Dhaka 1229 <br>
								<b>Standard:</b> 5 star<br>
								<b>Contact No: 02-8900089</b>
								<br>
								<br>
								<a href="http://www.starwoodhotels.com/lemeridien/property/overview/index.html?propertyID=3810&SWAQ=958C" target="_blank">Official website</a>
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>

			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="rbdk.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div class="centered">
								<h3>Radisson Blu Dhaka Water Garden/h3><br><br>
								<b>Location:</b>Airport Road, Dhaka Cantonment, Dhaka 1206 <br>
								<b>Standard:</b> 5 star<br>
								<b>Contact No:   02-9834555</b>
								<br>
								<br>
								<a href="https://www.radissonblu.com/en/hotel-dhaka?facilitatorId=CSOSEO&csref=org_gmb_sk_en_sn_ho_BANDHAKA" target="_blank">Official website</a>
						
								
							</div>	
					<div>
					
					
					
				</td>


			</tr>


			<tr>
				
				<td id="im">
					
						
							<div class="container" >
								<img src="ppdk.jpg">
								<div class="centered">
									

								</div>	
							<div>

						
				
					
					
				</td>
				<td id="tx">
					
					<div class="container" >
							
							<div class="centered">
								<h3>Pan Pacific Sonargaon Dhaka Hotel</h3><br><br>
								<b>Location:</b>107 Kazi Nazrul Islam Avenue, Dhaka 1215 <br>
								<b>Standard:</b> 5 star<br>
								<b>Contact No:  02-9128008</b>
								<br>
								<br>
								<a href="https://www.panpacific.com/en/hotels-and-resorts/pp-dhaka.html?utm_source=google&utm_medium=business_listing">Official website</a>
						
								
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