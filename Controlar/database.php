<?php
	session_start();
	if(isset($_POST['comment_jaflong']))
	{
		$comment =$_POST['comtxt'];
		$name ="jaflong";
		$con =mysqli_connect('localhost','root','','guideme');
		$query ="INSERT INTO comment VALUES ('','$name','$comment','')";
		$run =mysqli_query($con,$query);
		if ($run) {
			header('location:jaflong.php');
		}
		
		
	}
	else if(isset($_POST['comment_bisnakandi']))
	{
		$comment =$_POST['comtxt'];
		$name ="bisnakandi";
		$con =mysqli_connect('localhost','root','','guideme');
		$query ="INSERT INTO comment VALUES ('','$name','$comment','')";
		$run =mysqli_query($con,$query);
		if ($run) {
			header('location:bisnakandi.php');
		}
		
		
	}
	else if(isset($_POST['comment_ratargul']))
	{
		$comment =$_POST['comtxt'];
		$name ="ratargul";
		$con =mysqli_connect('localhost','root','','guideme');
		$query ="INSERT INTO comment VALUES ('','$name','$comment','')";
		$run =mysqli_query($con,$query);
		if ($run) {
			header('location:ratargul.php');
		}
		
		
	}
	else if(isset($_POST['comment_cox']))
	{
		$comment =$_POST['comtxt'];
		$name ="cox";
		$con =mysqli_connect('localhost','root','','guideme');
		$query ="INSERT INTO comment VALUES ('','$name','$comment','')";
		$run =mysqli_query($con,$query);
		if ($run) {
			header('location:cox.php');
		}
		
		
	}
	else if(isset($_POST['comment_inani']))
	{
		$comment =$_POST['comtxt'];
		$name ="inani";
		$con =mysqli_connect('localhost','root','','guideme');
		$query ="INSERT INTO comment VALUES ('','$name','$comment','')";
		$run =mysqli_query($con,$query);
		if ($run) {
			header('location:inani.php');
		}
		
		
	}
	else if(isset($_POST['comment_martin']))
	{
		$comment =$_POST['comtxt'];
		$name ="martin";
		$con =mysqli_connect('localhost','root','','guideme');
		$query ="INSERT INTO comment VALUES ('','$name','$comment','')";
		$run =mysqli_query($con,$query);
		if ($run) {
			header('location:martin.php');
		}
		
		
	}
	else if(isset($_POST['comment_sajek']))
	{
		$comment =$_POST['comtxt'];
		$name ="sajek";
		$con =mysqli_connect('localhost','root','','guideme');
		$query ="INSERT INTO comment VALUES ('','$name','$comment','')";
		$run =mysqli_query($con,$query);
		if ($run) {
			header('location:sajek.php');
		}
		
		
	}
?>