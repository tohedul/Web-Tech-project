<?php
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
	<title>Update</title>
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
	<div align="right" id="l"><a href="../View/tour_home.php" >Log Out</a></div>	
	
	
	<?php
		$id=$_REQUEST['id'];

		$con=mysqli_connect('localhost','root','','guideme');

		$query="SELECT * FROM edu  WHERE id='$id' ";
		$run=mysqli_query($con,$query);
		$data=mysqli_fetch_assoc($run)
	?>
	<div align="center">
		<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
		<fieldset  style="width: 22%; height: 450px;">
			<legend style="font-size: 30px; font-style: italic;">Update Data</legend>
			<table align="center" style="font-size: 23px;">
				<br><br>
				<tr>
					<td>Department:</td>
					<td><?php echo $data['dept']; ?>  </td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name" id="name" value="<?php echo $data['name']?>"></td>
				</tr>
				<tr>
					<td>Image: </td>
					<td><input type="file" name="pic"></td>
				</tr>
				<tr>
					<td>Website link: </td>
					<td><input type="text" name="link" id="link" value="<?php echo $data['link']?>"></td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="update" value="update">

					</td>
				</tr>
			</table>
		</fieldset>
		</form>
	</div>	
</body>
</html>


<?php
	if(isset($_POST['update']))
	{
		$name=$_POST['name'];
		$link=$_POST['link'];

		$query="UPDATE edu SET name='$name',link='$link'  WHERE id='$id' ";
		$run=mysqli_query($con,$query);
		if($run)
		{
			?>
				<script>
					
					alert('Updated Successfully');
					window.location='admin.php';
				</script>


			<?php
			//header('Location:admin.php');
			
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

?>