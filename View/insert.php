<?php
	session_start();
	if(isset($_COOKIE['id']) && $_COOKIE['utype']=='admin'){
		
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
	<title>Insert</title>
	<style type="text/css">
		body{
			margin: 0 auto;

		}
		#p{
			background-color: #9bcadb;
			font-size: 50px;
			color: #eff7f1;
			margin-top: 0;

		}
		button{

			border-radius: 15px;
			margin-bottom: 10px;
			text-align: center;
			height: 60px;
			width: 205px;
			font-size: 25px;
		}
		
		a{
			text-decoration: none;
		}
		#l{
			margin-top: 0;
			font-size: 20px;
			margin-right: 10px;
		}
		#l a:hover{
			color: red;

		}
		#t{
			font-size: 30px;


		}
		
	</style>
</head>
<body>
	
	<h2 align="center" id="p"> Admin Dashboard </h2>
	<div align="right" id="l"><a href='../Controlar/logout.php'><button type='button' name='logout_submit' onclick='".session_destroy()."'>Log Out</button></a></div>
	<h3 align="center" id="t">Insert Data</h3>
	
	
	<div>
		<table align="center">
			<tr>
				<td style="border: 1px solid black;">
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?> " enctype="multipart/form-data">
						<table id="tab1">
							
							<tr align="center">
								
								<td colspan="2">
									
										<h2>Tourist spot</h2>
										

								</td>
							</tr>
							<tr>
								<td>Division: </td>
								<td>
									<select name="division">
										<option>select</option>
										<option > Chittagong </option>
										<option>Dhaka</option>
										<option>Sylhet</option>
										

									</select>
								</td>

							</tr>
							<tr>
								<td>District: </td>
								<td>
									<select name="district">
										<option>select</option>
										<option>Coxs bazar</option>
										<option>Teknaf</option>
										<option>Bandarban</option>
										<option>Khagrachori</option>
										<option>Chittagong</option>
										<option>Sylhet</option>
										<option>Maulvibazar</option>
										<option>Habiganj</option>
										<option>Sunamganj</option>
										<option>Dhaka</option>
										<option>Gazipur</option>
										<option>Narayanganj</option>
										<option>Manikganj</option>
										<option>Mymensing</option>
										<option>Kishoregonj</option>
										<option>Rajshahi</option>

									</select>
								</td>

							</tr>
							<tr>
								<td>Name: </td>
								<td> <input type="text" name="name" placeholder="enter name"></td>
							</tr>
							<tr>
								<td>Location: </td>
								<td> <input type="text" name="location" placeholder="enter detail"> </td>
							</tr>
							<tr>
								<td>Details: </td>
								<td>
									<input type="textarea" name="details">
								</td>
							</tr>
							

							<tr>
								<td>Image: </td>
								<td> <input type="file" name="img" placeholder="select image"></td>
							</tr>
							<tr>
								
								<td colspan="2" align="center"><input type="submit" name="submit_t" value="Insert" ></td>
							</tr>
						</table>
						</form>
					</td>




					<td style="border: 1px solid black;">
					<form method="post" action="<?php $_SERVER['PHP_SELF']; ?> " enctype="multipart/form-data">
						<table id="tab2">
							
							<tr align="center">
								
								<td colspan="2">
									
										<h2>Hotels</h2>
										

								</td>
							</tr>
							<tr>
								<td>Area: </td>
								<td>
									<select name="dist">
										<option>select</option>
										<option>Coxs bazar</option>
										<option>Teknaf</option>
										<option>Bandarban</option>
										<option>Khagrachori</option>
										<option>Chittagong</option>
										<option>Sylhet</option>
										<option>Maulvibazar</option>
										<option>Habiganj</option>
										<option>Sunamganj</option>
										<option>Dhaka</option>
										<option>Gazipur</option>
										<option>Narayanganj</option>
										<option>Manikganj</option>
										<option>Mymensing</option>
										<option>Kishoregonj</option>
										<option>Rajshahi</option>

									</select>
								</td>

							</tr>
							<tr>
								<td>Name: </td>
								<td> <input type="text" name="name" placeholder="enter name"></td>
							</tr>
							<tr>
								<td>Location: </td>
								<td> <input type="text" name="location" placeholder="enter location"> </td>
							</tr>
							<tr>
								<td>Phone no: </td>
								<td> <input type="text" name="phone" placeholder="enter Phone no"> </td>
							</tr>
							<tr>
								<td>Website: </td>
								<td> <input type="text" name="website" placeholder="enter websitelink"> </td>
							</tr>
							<tr>
								<td>Standard: </td>
								<td>
									<select name="standard">
										<option>select</option>
										<option>5 star</option>
										<option>4 star</option>
										<option>3 star</option>
										<option>2 star</option>
										<option>1 star</option>
										

									</select>
								</td>

							</tr>
							<tr>
								<td>Image: </td>
								<td> <input type="file" name="img" placeholder="select image"></td>
							</tr>
							<tr>
								
								<td colspan="2" align="center"><input type="submit" name="submit_h" value="Insert" ></td>
							</tr>
						</table>
						</form>
					</td>





						<td style="border: 1px solid black;">
							<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
							
									<table id="tab3">
										<tr align="center">
											<td colspan="2">
												<h2>Medical & Education</h2>
											</td>
										</tr>
										<tr>
											<td>Select</td>
											<td>
												<select name="select">
													<option>select</option>
													<option>Hospital</option>
													<option>Edu institute</option>
												</select>
											</td>
										</tr>
										
										<tr>
											<td>Dept: </td>
											<td>
												<select name="dept">
													<option>select</option>
													<option>cardi</option>
													<option>ortho</option>
													<option>neuro</option>
													<option>gyne</option>
													<option>cse</option>
													<option>eee</option>
													<option>bba</option>
													<option>medi_study</option>

												</select>
											</td>
										</tr>
										<tr>
											<td>Name: </td>
											<td> <input type="text" name="name" placeholder="enter name"></td>
										</tr>
										<tr>
											<td>Image: </td>
											<td> <input type="file" name="pic" placeholder="select image"></td>
										</tr>
										<tr>
											<td>Website: </td>
											<td> <input type="text" name="link" placeholder="enter website url"></td>
										</tr>
										<tr>
											
											<td colspan="2" align="center"><input type="submit" name="submit_hande" value="Insert" ></td>
										</tr>
									</table>
						</form>
					</td>







					<td style="border: 1px solid black;">
							<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
							
									<table id="tab3">
										<tr align="center">
											<td colspan="2">
												<h2>New Department</h2>
											</td>
										</tr>
										<tr>
											<td>Type</td>
											<td>
												<select name="type">
													<option>Select</option>
													<option>medi</option>
													<option>edu</option>
												</select>
											</td>
										</tr>
										
										<tr>
											<td>Dept. Name: </td>
											<td> <input type="text" name="name" placeholder="  xyz"></td>
										</tr>
										<tr>
											<td>Image: </td>
											<td> <input type="file" name="pic" placeholder="select image"></td>
										</tr>
										<tr>
											<td>Page link: </td>
											<td> <input type="text" name="link" placeholder="   abc.php"></td>
										</tr>
										<tr>
											
											<td colspan="2" align="center"><input type="submit" name="submit_dept" value="Insert" ></td>
										</tr>
									</table>
						</form>
					</td>

				</tr>
		</table>
	</div>
	
</body>
</html>


<?php

	
	if(isset($_POST['submit_t'] ))
	{
		
		if (isset($_POST['division'])&& isset($_POST['district']) ) 
		{
			
			if($_POST['name']!=""&&$_POST['location']!=""&&$_POST['details']!="" )
			{

				if($_FILES['img']['tmp_name']!="" )
				{
					$con = mysqli_connect("localhost","root","","guideme");
					$div=$_POST['division']; 
					$dis=$_POST['district'];
					$name=$_POST['name'];
					$location=$_POST['location'];
					$details=$_POST['details'];
					$image=$_FILES['img']['name'];
					$destination="../Model/images/".basename($_FILES['img']['name'] );

					move_uploaded_file($image, $destination);


					$query ="INSERT INTO tour_spot VALUES ('','$name','$image','$details','$location','$div','$dis')";
					$run =mysqli_query($con,$query);
					if($run)
					{
						?>
						<script>
							alert('tour_spot data inserted successfully');
						</script>
					<?php
					}
					else
					{
						?>
						<script>
							alert('Error!');
						</script>
					<?php
					}

				}
				else
				{
					?>
						<script>
							alert('Image must be selected!');
						</script>
					<?php
				}

			}
			else
			{
				?>
					<script>
						alert('Fields can not  be empty!');
					</script>
				<?php
			}
		}
		else
			{
				?>
					<script>
						alert('Options must be selected!');
					</script>
				<?php
			}
	}
	elseif(isset($_POST['submit_h'] ))
	{
		
		if (isset($_POST['standard'])&& isset($_POST['dist']) ) 
		{
			
			if($_POST['name']!=""&&$_POST['location']!=""&&$_POST['phone']!=""&&$_POST['website']!="" )
			{

				if($_FILES['img']['tmp_name']!="" )
				{
					$con = mysqli_connect("localhost","root","","guideme");
					$phone=$_POST['phone']; 
					$area=$_POST['dist'];
					$name=$_POST['name'];
					$location=$_POST['location'];
					$website=$_POST['website'];
					$image=$_FILES['img']['name'];
					$standard=$_POST['standard'];
					$destination="../Model/images/".basename($_FILES['img']['name'] );

					move_uploaded_file($image, $destination);


					$query ="INSERT INTO hotel VALUES ('','$name','$area','$location','$phone','$website','','$image' ,'$standard')";
					$run =mysqli_query($con,$query);
					if($run)
					{
						?>
						<script>
							alert('hotel data inserted successfully');
						</script>
					<?php
					}
					else
					{
						?>
						<script>
							alert('Error!');
						</script>
					<?php
					}

				}
				else
				{
					?>
						<script>
							alert('Image must be selected!');
						</script>
					<?php
				}

			}
			else
			{
				?>
					<script>
						alert('Fields can not  be empty!');
					</script>
				<?php
			}
		}
		else
			{
				?>
					<script>
						alert('Options must be selected!');
					</script>
				<?php
			}
	}
	else if(isset($_POST['submit_hande'] ))
	{
		
		if (isset($_POST['select']) ) 
		{
			$sl=$_POST['select'];
			if ($sl=="Hospital" ) 
			{
				if(isset($_POST['dept'] ))
				{
					$dp=$_POST['dept'];
					if($dp=="cardi" ||$dp=="ortho" ||$dp=="neuro" ||$dp=="gyne" )
					{	
						$pic=$_FILES['pic']['name'];

						if($_POST['name']!="" && $pic!="" && $_POST['link']!="")
						{
							$dept=$_POST['dept'];
							$name=$_POST['name'];
							$image = $_FILES['pic']['name'];

							$target="../Model/images/".basename($image);
							move_uploaded_file($_FILES['pic']['tmp_name'] , $target);
							$link=$_POST['link'];

							$con=mysqli_connect('localhost','root','','guideme');
							$query="INSERT INTO medi  VALUES ('','$dept','$name','$pic','$link') ";
							$run=mysqli_query($con,$query);
							if($run)
							{
								?>
									<script>
										alert("Data inserted successfully");

									</script>


								<?php



							$dept="";
							$name="";
							$link="";
							$pic="";
							}
							else
							{
								?>
									<script>
										alert("Something went wrong! try again ");

									</script>


								<?php
							}
						}
						else
						{
							?>
									<script>
										alert("Fields must be filled!! ");

									</script>


								<?php
						}
						
					} 
					else
					{
						?>
									<script>
										alert("Select right dept for Medical");

									</script>


								<?php
					}
				}
				else
				{
					?>
						<script>
							alert("Dept must be selected ");

						</script>


					<?php
				}
			}
			elseif ($sl=="Edu institute") 
			{
				


				if(isset($_POST['dept'] ))
				{
					$dp=$_POST['dept'];
					if($dp=="cse" ||$dp=="eee" ||$dp=="bba" ||$dp=="medi_study" )
					{	
						$pic=$_FILES['pic']['name'];

						if($_POST['name']!="" && $pic!="" && $_POST['link']!="")
						{
							$dept=$_POST['dept'];
							$name=$_POST['name'];
							$image = $_FILES['pic']['name'];

							$target="../Model/images/".basename($image);
							move_uploaded_file($_FILES['pic']['tmp_name'] , $target);
							$link=$_POST['link'];

							$con=mysqli_connect('localhost','root','','guideme');
							$query="INSERT INTO edu  VALUES ('','$dept','$name','$pic','$link') ";
							$run=mysqli_query($con,$query);
							if($run)
							{
								?>
									<script>
										alert("Data inserted successfully");

									</script>


								<?php



							$dept="";
							$name="";
							$link="";
							$pic="";
							}
							else
							{
								?>
									<script>
										alert("Something went wrong! try again ");

									</script>


								<?php
							}
						}
						else
						{
							?>
									<script>
										alert("Fields must be filled!! ");

									</script>


								<?php
						}
						
					} 
					else
					{
						?>
									<script>
										alert("Select right dept for Medical");

									</script>


								<?php
					}
				}
				else
				{
					?>
						<script>
							alert("Dept must be selected ");

						</script>


					<?php
				}
			}
		}
		else
		{
			?>
				<script>
					alert("Option must be selected! ");

				</script>


			<?php
		}
	}












	else if(isset($_POST['submit_dept'] ))
	{
		
		if (isset($_POST['type']) ) 
		{
			$type=$_POST['type'];
			if ($type=="medi" ) 
			{
										
				$pic=$_FILES['pic']['name'];

				if($_POST['name']!="" && $pic!="" && $_POST['link']!="")
				{
					$dept=$_POST['dept'];
					$name=$_POST['name'];
					$image = $_FILES['pic']['name'];

					$target="../Model/images/".basename($image);
					move_uploaded_file($_FILES['pic']['tmp_name'] , $target);
					$link=$_POST['link'];

					$con=mysqli_connect('localhost','root','','guideme');
					$query="INSERT INTO dept  VALUES ('','$name','$pic','$link','$type') ";
					$run=mysqli_query($con,$query);
					if($run)
					{
						?>
							<script>
								alert("Data inserted successfully");

							</script>


						<?php



					$dept="";
					$name="";
					$link="";
					$pic="";
					}
					else
					{
						?>
							<script>
								alert("Something went wrong! try again ");

							</script>


						<?php
					}
				}
				else
				{
					?>
							<script>
								alert("Fields must be filled!! ");

							</script>


						<?php
				}
						
				
			}
			elseif ($type=="edu") 
			{				
				
						
				$pic=$_FILES['pic']['name'];

				if($_POST['name']!="" && $pic!="" && $_POST['link']!="")
				{
					$dept=$_POST['dept'];
					$name=$_POST['name'];
					$image = $_FILES['pic']['name'];

					$target="../Model/images/".basename($image);
					move_uploaded_file($_FILES['pic']['tmp_name'] , $target);
					$link=$_POST['link'];

					$con=mysqli_connect('localhost','root','','guideme');
					$query="INSERT INTO dept  VALUES ('','$name','$pic','$link','$type') ";
					$run=mysqli_query($con,$query);
					if($run)
					{
						?>
							<script>
								alert("Data inserted successfully");

							</script>


						<?php



					$dept="";
					$name="";
					$link="";
					$pic="";
					}
					else
					{
						?>
							<script>
								alert("Something went wrong! try again ");

							</script>


						<?php
					}
				}
				else
				{
					?>
							<script>
								alert("Fields must be filled!! ");

							</script>


						<?php
				}
				
			}
		}
		else
		{
			?>
				<script>
					alert("Dept must be selected! ");

				</script>


			<?php
		}
	}




							$dept="";
							$name="";
							$link="";
							$pic="";
	
?>