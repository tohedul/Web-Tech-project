<?php
	if(isset($_COOKIE['id'])){
		
	}
	else
	{
		$L=$_COOKIE['lastPage'];
		header('Location:../View/'.$L);
	}
?>

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
		background-image: url("../Model/images/notebg.jpg"); 
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
						<img src="../Model/Logo/tourlogo.png" height="48px" width="65px">
					</td>
					<td>
						<label>GuideMe.com</label>
					</td>
					<td id="ddL">
						<div  id="cont" >
		
							<ul>
								<li > <a href="../View/tour_home.php"><img style="margin-top:10px; margin-left: -5px;" src="../Model/Logo/tourLgo.png"></a>        
									<ul>
										<li > <a href="../View/medical.php"><img style="margin-top:10px;margin-left: -5px;" src="../Model/Logo/mediLgo.png"></a> </li>
										<li > <a href="../View/edu.php"> <img style="margin-top:10px;margin-left: -3px;" src="../Model/Logo/eduLgo.png"></a> </li>					
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
				<tr>
					<td>
						<div align="right" id="l"><a href='../Controlar/logout.php'><button type='button' name='logout_submit' onclick='".session_destroy()."'>Log Out</button></a></div>
							<div align="center">
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

			<br><h1 style="color: #2ba3db; text-decoration: underline;">. My Travel Stories .</h1>

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