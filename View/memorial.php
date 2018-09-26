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
		
		height: 1200px;
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

		height: 50px;
		width: 150px;
		border-radius: 13px;
		background-color: blue;
		color: white;
		font-size: 20px;
		text-align: center;
		font-style: italic;
		padding-top: 23px;
		margin-top: 150px;

		

	}
	.hb:hover{
		background-color: red;
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

			<h1>National Memorial</h1>
		</div>
		<div style="height: 400px;background-image: url(memoriall.jpg);">
			

		</div>
		<div style="text-align: left;font-size: 30px;">
			<br><b>Location:</b>  Savar, Dhaka, Bangladesh<br><br>
			<p >
			National Martyrs’ Memorial is the national monument of Bangladesh, set up in the memory of those who died in the Bangladesh Liberation War of 1971, which brought independence and separated Bangladesh from Pakistan. The monument is located in Savar, about 35 km north-west of the capital, Dhaka. It was designed by Syed Mainul Hossain.

			</p>

			<div align="center" style="">

				<a href="hoteldk.php">
					<div class="hb" >
						Hotels around
					</div>
				</a>
			</div>

		</div>

		
		
		
	</div>

	<div class="footer">
		Copyright@
	</div>
	

	</div>

</body>
</html>