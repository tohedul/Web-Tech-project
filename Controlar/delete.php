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
	<title>Sign Up</title>
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
	<div align="right" id="l"><a href='../Controlar/logout.php'><button type='button' name='logout_submit' onclick='".session_destroy()."'>Log Out</button></a></div>
	<div align="center">
	<h3 align="center" id="t">Delete Data</h3>
	<h2>-----------------------</h2>
	
	<h1 align="center">Are You Sure?</h1>


	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
		<table align="center">
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="yes" value="Yes">
				</td>
				<td colspan="2" align="center">
					<input type="submit" name="no" value="No">
				</td>
			</tr>

		</table>
		
	</form>
	
</body>
</html>



<?php
	if (isset($_POST['yes'] )) 
	{
		$id=$_REQUEST['id'];

		$con=mysqli_connect('localhost','root','','guideme');

		$query="DELETE FROM edu  WHERE id='$id' ";

		$run=mysqli_query($con,$query);
			if($run)
			{



				header('Location:../View/admin.php');
			}
			else
			{
				echo "Error!!";
			}


	}
	else if(isset($_POST['no'] ))
	{
		header('Location:../View/admin.php');
	}
	

?>