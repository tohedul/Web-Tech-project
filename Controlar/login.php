<?php
	session_start();

  

if( isset($_REQUEST["signup_submit"]))
{
	header("Location:../View/sign_up.php");
}

if(isset($_POST["login_submit"]))
{

	//////////////////
	if($_POST['uname']!="" && $_POST['password']!="")
	{
		$con=mysqli_connect('localhost','root','','guideme');

		$username= $_POST['uname'];
		$password=$_POST['password'];

		$query="SELECT * FROM user WHERE user_name='$username' AND password='$password'";
		$run=mysqli_query($con,$query);
		$row=mysqli_num_rows($run);
		if($row >= 1)
		{
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			$user_type=$data['user_type'];
			$uname=$data['user_name'];

			setcookie('id',$id,time()+86400,'/');
			setcookie('name',$data['name'] ,time()+3600,'/');
			setcookie('email',$data['email'] ,time()+3600,'/');
			setcookie('dob',$data['dob'] ,time()+3600,'/');
			setcookie('uname',$uname ,time()+3600,'/');
			setcookie('utype',$user_type ,time()+3600,'/');




			
			$_SESSION['utype']=$user_type;
			$_SESSION['uname']=$uname;
			if($_SESSION['utype']=='admin')
			{
				$_SESSION['uid']=$_COOKIE['id'];
				$L=$_COOKIE['lastPage'];
				header('location:../View/'.$L);
			}
			else
			{
				
				$_SESSION['uid']=$_COOKIE['id'];
				$L=$_COOKIE['lastPage'];
				header('Location:../View/'.$L);

			}
		}
		else
		{
			$L=$_COOKIE['lastPage'];
			header('location:../View/'.$L);
		}

	}
	else
	{
		?>
			<script type="text/Javascript">
				alert("Username or Pasword not correct!!");
			</script>


			<?php

			$L=$_COOKIE['lastPage'];
			header('location:../View/'.$L);
	}

	/*if(Validate_Login($_REQUEST['name'],  $_REQUEST['password'] ) == true  )
	{
		session_start();
		$name=$_REQUEST['name'];
		$_SESSION['name']=$name;		
		header("Location:tour_home.php");
	}
	else
	{
		//header("Location:tour_home.php");


	}*/
}
?>