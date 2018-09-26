<!-- 8 -->
<?php

	session_start(); //////////////////////////////////////////////////////////////////////////////
	$last_loc="medical.php";
	 setcookie('lastPage',$last_loc,time()+1000,'/'); 
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tour Guide: Education</title>
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
		
.container {
    position: relative;
    text-align: center;
    color: white;
}

.bottom-left {
    position: absolute;
    bottom: 8px;
    left: 16px;
}

.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}

.top-right {
    position: absolute;
    top: 8px;
    right: 16px;
}

.bottom-right {
    position: absolute;
    bottom: 8px;
    right: 16px;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}




{box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0; }
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

	.body{
		text-align: center;
		border: 2px solid black;
		width: 1000px;
		margin-left: 175px;



		
	}

	#t1 td{
		width: 990px;
		height: 450px;
		border: 1px solid black;

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
			margin-top: -1px;
			margin-bottom: -1px;
			border-radius: 7px;
		}

		#cont ul li:hover > ul li{	
			float: left;
			border-radius: 7px;
			margin-top: 0px;
			margin-bottom: 0px;
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
						<img src="../Model/Logo/tourlogo.png" height="48px" width="65px" style="margin-top:-6px;">
					</td>
					<td>
						<label>GuideMe.com</label>
					</td>
					<td id="ddL">
						<div  id="cont" >
		
							<ul>
								<li ><a href="edu.php"> <img style="margin-top:0px;margin-left: -3px;" src="../Model/Logo/eduLgo.png"></a>         
									<ul>
										<li > <a href="medical.php"><img style="margin-top:0px;margin-left: -5px;" src="../Model/Logo/mediLgo.png"></a> </li>
										<li > <a href="tour_home.php"><img style="margin-top:0px; margin-left: -5px;" src="../Model/Logo/tourLgo.png"></a> </li>					
									</ul>	
								</li>	
							</ul>
						</div>
					</td>
					
					

				</tr>
			</table>
			
		</header>

<!--///////////////////////////////////////////////// Log In //////////////////////////////////////////////////////// -->		

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
				echo 			"<a href='../Controlar/logout.php'><button type='button' name='logout_submit1' onclick='".session_destroy()."'>Log Out</button></a>";
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
				echo "<form method='post' action='login.php'>";
				echo	"<tr>";
				echo		"<td>";
				echo			"<input type='text' name='name' placeholder='username'>";
				echo		"</td>";
				echo		"<td>";
				echo			"<input type='password' name='password' placeholder='password'>";
				echo		"</td>";
				echo	"</tr>";
				echo	"<tr>";
				
				echo		"<td colspan='2'>";
				echo      		"<table align='right'>";
				echo 				"<tr>";
				echo 				  	"<th >";
				echo 					  	 "<input type='submit' name='signup_submit'  value='Sign Up'>";
				echo 				 	 "</th>";
				echo 				 	 "<th>";
				echo						 "<input type='submit' name='login_submit' value='Log in'>";
				echo 				 	 "</th>";
				echo				"</tr>";
				echo           "</table>";				
				echo		"</td>";
				echo	"</tr>";

				echo	"</form>";
				echo"</table>";
			}
			
//////////////////////////////////////////////////// -- Slide show--- /////////////////////////////////////////////////////

        ?> 
    </div>
        <div>
			<tr>
				<td>
				<select onchange="location=this.value" style="font-size:20px;border-radius: 15px;height: 45px;width:100%;border:1px solid black; text-align: center;">

					<option value="bba.php">BBA</option>
					<option value="medi_study.php">Medical Study</option>
					<option value="cse.php">CSE</option>
					<option value="eee.php">EEE</option>
					
					
				</select>
				</td>
			</tr>
			

			
		</div>

		<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="../Model/images/bba.jpg" style="width:100%" height="500px">
  <div class="centered">
		<span style="color:black;font-size: 60px;opacity: .7; text-decoration: none;" >
				B B A specialized institudes 
		</span>
  </div>
  
</div>



<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br><hr><hr><br>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";

}

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

		<table>

			<?php

			$con = mysqli_connect('localhost','root','','guideme');
			$query="SELECT * FROM edu WHERE dept='bba'";
			$run =mysqli_query($con,$query);
			if ($run) {
				while ($data=mysqli_fetch_assoc($run)) {

					?>
					

					<tr id="t1">
						
						
						<td style=" background-image: url(<?php echo "../Model/images/".$data['pic'];?>); height: 400px;width: 990px">
					
						<a href="<?php echo $data['link'];?>" target="_blank">
							<span style="color:white;font-size: 50px;opacity: .7; text-decoration: none;">
								<?php echo $data['name'];?>
							</span>
						</a>
					
					
					</td>



					</tr>
					
					<?php
				}
			}
			
					

			?>
			

		</table>


		
	</div>

	<div class="footer">
		Copyright@
	</div>
	

	</div>

</body>

</html>