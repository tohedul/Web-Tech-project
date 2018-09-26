
<!DOCTYPE html>
<html>
<head>
	<title>Tour Guide</title>
	<style>

		.main{
			height: 950px;
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
		
		
		border: 1px solid black;
		height: 800px;
		width: 1000px;
		margin-left: 15%;
		background-color: #bbb;



		
	}

	.sub-body{

		border: 0px solid black;
		height: 720px;
		width: 940px;
		background-color: #ccc;
		margin-left: 3%;
		margin-top: 1%; 
		background-image: url("notebg.jpg"); 
	}

	.box{
		border: 0px solid black;
		height: 650px;
		width: 740px;
		text-align: left;
		margin-left: 15.7%;
		margin-top:1%; 
		opacity: .9;
		
	}

	.date{
		width: 300px;
		margin-left: 73.66%;
		margin-top:6.5%; 
		opacity: .4;
	}

	input {
    	width: 15%;
	}


	.TextArea{
		margin-top: 3.5%;
		font-size: 7.5mm;
		opacity: .7;

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
				<tr>
					<td>
						
					</td>
					<td>
				
					</td>
				</tr>
				<tr>
					<td colspan="3" >
						
					</td>
				</tr>
			</table>
		</div>
		<div>
			<tr>
				<td>
				<select onchange="location=this.value" style="font-size:20px;border-radius: 15px;height: 45px;width:100%;border:1px solid black; text-align: center;">

					<option>Pick a city to explore</option>
					<option value="chittagong.php">Chittagong</option>
					<option value="dhaka.php">Dhaka</option>
					<option value="sylhet.php">Sylhet</option>

				</select>
				</td>
			</tr>
			

			
		</div>



	<div class="body" >
		<div style="height: 50px;text-align: center;">

			<br><h1 style="color: #2ba3db; text-decoration: underline;">. My Student Life Stories .</h1>

		</div>

		<div class="sub-body">
			<br/>
				<div class="box"  >
					<form action="validate.php" method="post">

						<div class="date">
							<input type="text" placeholder=" Day "  name="day"> /
							<input type="text" placeholder=" Month "  name="month"> /
							<input type="text" placeholder=" Year "  name="year">			
						</div>
						<input type="text" width="100%" placeholder="Place"  name="place">
						
						<br/>
						<textarea rows="13" cols="46"  name="story" class="TextArea">  </textarea><br/><br/>						
						<div style="margin-left: 38.66%; padding: 2px 2px 2px 2px;">  <input type="submit" name="submit_story" value="Add Story"> </div>
					</form>
				</div>
		</div>
	</div>

	<div class="footer">
		Copyright@
	</div>
	

	</div>

</body>
</html>