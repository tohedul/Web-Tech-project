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
	<title>Admin Dashboard</title>
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
			margin-right: 15px;

		}
		#l a:hover{
			color: red;
		}
		
	</style>
	<script>
		function getData(str)
		{
			if(str.length == 0)
			{
				document.getElementById("sug").innerHTML="empty";
			}
			else
			{
				var xHttp = new XMLHttpRequest();
				xHttp.onreadystatechange=function()
				{
					if(this.readyState==4 && this.status==200)
					{
						document.getElementById("sug").innerHTML=this.responseText;
					}
				};

				xHttp.open("GET","../Controlar/data.php?q="+str,true);
				xHttp.send();
			}
		}

	</script>
</head>
<body>
	
	<h2 align="center" id="p"> Admin Dashboard </h2>	
	<div align="right" id="l"><a href='../Controlar/logout.php'><button type='button' name='logout_submit' onclick='".session_destroy()."'>Log Out</button></a></div>
	<div align="center">
	<button><a href="../View/insert.php">Insert Data</a></button><br>
	<table align="center" style="padding-top: 15px ;" >
		<tr>
			<td>
				<label> <b> Search :  </b></label>
			</td>
			<td>
				<input type="text" placeholder="Search" onkeyup="getData(this.value)" name="box">
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				<p id="sug">  </p>
			</td>
		</tr>
	</table>
	</div>
</body>
</html>