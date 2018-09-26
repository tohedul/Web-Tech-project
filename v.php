<?php
	session_start();
	
	

	$erroMas="";

	function Validate_name($name)
	{
		 $erroMas="";
		$f = false;
		if($name =="")
		{
			$erroMas = $erroMas."Name field can not be EMPTY !!<br>"; 
		}
		else 
		{ 

			
			if( ( ord($name[0])>= ord('A') && ord($name[0])<= ord('Z') ) ||( ord($name[0])>= ord('a') && ord($name[0])<= ord('z') )  ) 
			{
				if( str_word_count($name) < 2)
				{
					$erroMas= $erroMas. "Name should contain at least 2 words...<br>";
				}
				else{
					$f=true;
					$GLOBALS['name']=$name;
				}  


		    }
			else
			{
				$erroMas= $erroMas. "Name Must be start with a letter ...<br>";
			}
	    }

	    echo "<br>Name: ".$f;
	    return $f;
    }



	function Validate_Email()
	{
		$f=false;
		$Email = $_POST["email"] ;
		
		if($Email =="")
		{
			$erroMas= $erroMas. "NAME field can not be EMPTY !!<br>";   
		}
		else  
		{ 
			if(( ord($Email[0])>= ord('A') && ord($Email[0])<= ord('Z') ) ||( ord($Email[0])>= ord('a') && ord($Email[0])<= ord('z') )  )   
			{
				$f1 = false;
				$f2 = false;

				for($i=0; $i< strlen( $Email ); $i++)
				{
					if($Email[$i]=='@' )
					{
						if($f1 == false)
						{
							$f1=true;
						}
						else
						{
							$f1 = false;
						}
					}
					

					if($Email[$i]=='.' )
					{
						if($f2 == false)
						{
							$f2=true;
						}
						else
						{
							$f2 = false;
						}
					}	
				}	


				if($f1==true && $f2 == true)
				{
					if( str_word_count($Email) < 3)
					{
						$erroMas= $erroMas. "Email formate not Correct...<br>";  
					}
					else 
					{
						$f=true;
						$GLOBALS['email']= $Email;
					}
				}	
				else
				{
					$erroMas= $erroMas. "Email formate not Correct...<br>";
				} 
					
		    }
			else
			{
				$erroMas= $erroMas. "Name Must be start with a letter ...<br>";   
			}	
	    }
	    echo "<br>mail: ".$f;
	    return $f;
	}




  	function Validate_DOB()
  	{
  		$f=false;
  		if($_POST["date"]=="")
  		{
  			$erroMas= $erroMas. "  Date can not be Empty  !!   "."<br/>";
  		}
  		else
  		{
  			if($_POST["year"]%4 == 0 && $_POST["date"]>29 )
  			{
				$erroMas= $erroMas. "Date can not be more than 29 in Leap year ...   "."<br/>";
  			}
  			else if($_POST["year"]%4 != 0 && $_POST["date"]>28 )
  			{
				$erroMas= $erroMas. "Date can not be more than 28 ...   "."<br/>";
  			}
  			else{
  				$f=true;
  				$GLOBALS['day'] = $_POST["date"];
  			}	
  			
  		}



  		if($_POST["month"]=="")
  		{
  			$erroMas= $erroMas. "Month can not be Empty  !!"."<br/>";
  		}
  		else
  		{
  			if($_POST["month"] >12)
  			{
  				$erroMas= $erroMas. "   wrong Input in Month field ...   "."<br/>";
  			}
  			else
  			{
  				$f=true;
  				$GLOBALS['month'] = $_POST["month"];
  			}

  		}



  		if($_POST["year"]=="")
  		{
  			$erroMas= $erroMas. "   Year can not be Empty  !!    "."<br/>";
  		}
  		else
  		{  	if( 1910 >$_POST["year"] && $_POST["year"]>2000)
  			{			
  				$erroMas= $erroMas. "   wrong Input in Year field ...   "."<br/>";
  			}
  			else 
  			{
  				$f=true;
  				$GLOBALS['year'] = $_POST["year"];
  			}
  		}
  		echo "<br>dob: ".$f;
  		return $f;
	}



	function Validate_Gender()
	{
		$f=false;
		if($_POST["gen"]=="")
		{
			$erroMas= $erroMas.  " Any of the option of Gender MUST BE selected .... !!<br>";
		}
		else
		{
			$f=true;
  			$GLOBALS['gender'] = $_POST["gen"];

		}
		echo "<br>gen: ".$f;
		return $f;
	}








 

    function Validate_Degree()
	{
		$f=false;
		if( empty($_POST["degree"]) )
		{
			$erroMas= $erroMas.  " Any of the options MUST BE selected .... !!<br>";
		}
		else
		{
			$c = 0 ;
			foreach ($_POST["degree"] as $degree)
			{
				$c++;
				$GLOBALS['degree'][$c] = $degree.'<br/>';
			}

			if($c < 2)
			{
				$erroMas= $erroMas." => At least 2 options must be selected ... <br/> ";
			}
			else
			{
				$f=true;
			}
			
		} 
		
		return $f;
	}





 	function Validate_bGroup()
	{
		$f=false;
		if($_POST["bg"]==null)
		{
			$erroMas= $erroMas.  " Any of the option of Blood Group MUST BE selected .... !!<br>";
		}
		else
		{
			if($_POST["bg"]=="none")
			{
				$erroMas= $erroMas.  "Any of the Blood groups MUST BE selected .... !!<br>";
			}
			else if($_POST["bg"]=="A+")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}
			else if($_POST["bg"]=="A-")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}
			else if($_POST["bg"]=="B+")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}
			else if($_POST["bg"]=="B-")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}
			else if($_POST["bg"]=="AB+")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}
			else if($_POST["bg"]=="AB-")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}
			else if($_POST["bg"]=="O+")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}
			else if($_POST["bg"]=="O-")
			{
				$f=true;
				$GLOBALS['bg']=$_POST["bg"];
			}		
		} 


		return $f;
	}

	




	function alfa($name)
	{
		for($i=0 ; $i < strlen($name); $i++)
		{
			if(( ord($name[$i])>= ord('A') && ord($name[$i])<= ord('Z') ) ||( ord($name[$i])>= ord('a') && ord($name[$i])<= ord('z') ) || ord($name[$i])==   ord('-') ||  ord($name[$i])==   ord('_')   || ord($name[$i])==   ord('.') )
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}	


	function numeric($name)
	{
		for($i=0 ; $i < strlen($name); $i++)
		{
 			if(( ord($name[$i])>= ord('0') && ord($name[$i])<= ord('9') )  )
			{
				return true;
			}
			else
			{
				return false;
			}
		}	
	}

	function spchar($name)
	{
		for($i=0 ; $i < strlen($name); $i++)
		{
			if( ord($name[$i]) == ord('@') || ord($name[$i])== ord('#')  || ord($name[$i])== ord('$') || ord($name[$i])== ord('%')   )
			{
				return true;
			}
			else
			{
				return false;
			}
		}	
	}
		
	




	function Validate_Login()
	{
		
		$f=false; /// total flag
		$fn=0;   /// flag user name
		$fp=0;  /// flag pass
		$erroMas="";

		if($_POST["username"]!="")
		{
			if(strlen($_POST["username"]) <2)
			{
				$erroMas= $erroMas.  " At least 2 charecter needed ... <br>";
			} 
			else
			{
				$fn=1;
				$GLOBALS['username']=$_POST["username"];
			}
		}

		

		if(   strlen($_POST["password"]) <8   )
		{
			
			$erroMas= $erroMas. " Password must be at least 8 charecter ... <br> ";
		} 
		else
		{
			$fp=1;
			/*if(spchar( $_POST["password"]))
			{
				$fp=1;
				$GLOBALS['password']=$_POST["password"];
			}
			else
			{
				$erroMas = $erroMas . " At least one special charecter needed ... <br> ";
			}*/
		}
		
		if($fn==1 && $fp == 1)
		{
			$f=true; 
		}
		echo "<br>Login: ".$f ;
		return $f;
	}

	




	function Validate_change_Pass($c,$n,$r)
	{
		
		$f=false;
		$f1=false; // final flag for current pass Vs New pass 
		$f2=false; // final flag for New name Vs Re-New Name

		$erroMas="";

		$flg1 = true;
		$flg2 = true;

		for($q=0; $q < strlen($c) ; $q++ ) 
		{
			if( $c[$q]== $n[$q] )
			{
				$flg1=false;	
			}


			if($n[$q]!= $r[$q])
			{
				$flg2= false;
			}
		}	

		if(!$flg1)
		{
			$erroMas= $erroMas.  "New password should be different<br/>";
		}
		else
		{
			$f1=true;
			$GLOBALS['current_pass']=$c;
			$GLOBALS['new_pass']=$n;
		}
		

		if(!$flg2)
		{
			$erroMas= $erroMas. "New password & Re pass should be same<br/>";
		}
		else
		{
			$f2=true;			
			$GLOBALS['new_pass']=$n;
			$GLOBALS['Re_new_pass']=$r;
		}


		if($f1 && $f2)
		{
			$f=true;
		}
		
		return $f;
}






    function Validate_Pic()
    {
    	$f=false;

	  	$erroMas="";
	  	$target_dir = "downloads/";
	  	$target_file = $target_dir . basename($_FILES["img"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		
		
		if ($_FILES["img"]["size"] > 409152) 
		{
		    $erroMas= $erroMas. "Sorry, your file is too large<br/>";
		    $uploadOk = 0;
		
			
		
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) 
			{
			    $erroMas= $erroMas. "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
			    $uploadOk = 0;
			}
		}
		

		if ($uploadOk == 1) 
		{
				$f=true;
		        $GLOBALS['pic']=$_FILES["img"]["name"];
		        $Mas="The file ". basename( $_FILES["img"]["name"]). " has been uploaded.<br/>";
		    
		}
		else
		{
			$erroMas= $erroMas. "Try again";
		}

		return $f;

    }

/////////////////////////////////////// Confirm Password ////////////////////////////////////////////////////
  function Validate_ConPass($p,$c)
  {
  	$f=false;

	if($p==""||$c=="" )
	{ 	if($p=="")
	  	{
	  		$erroMas= $erroMas. "Password field can not be empty!!<br/>";
	  	}

	  	if($c=="")
	  	{
	  		$erroMas= $erroMas. "Confirm Password field can not be empty!!";
	  	}
	}
	else
	{


	  	$flg1 = true;
		
		for($q=0; $q < strlen($p) ; $q++ ) 
		{
			if($p[$q]!= $c[$q])
			{
				$flg1= false;
			}
		}	

			

		if($flg1==false)
		{
				$erroMas= $erroMas. "Password & Con pass should be same!!<br/>";
		}
		else
		{
			$f=true;
			$GLOBALS['pass']=$p;
			$GLOBALS['Con_pass']=$c;
		}	
	}

	echo "<br>ConPass: ".$f;
	return $f;
  }




 	function Validate_registration()
 	{
 		//echo "Its V<br>";
 		if(
		Validate_name($_POST["name"]) &&
		Validate_Email() &&
		Validate_Login() &&
		Validate_ConPass($_POST["password"], $_POST["con_Password"]) &&
		Validate_Gender() &&
		Validate_DOB()   )
 		{


 			$_SESSION['name']=$GLOBALS['name'];
 			$_SESSION['email']=$GLOBALS['email'];
 			$_SESSION['username']=$GLOBALS['username'];
 			$_SESSION['pass']=$GLOBALS['pass'];
 			$_SESSION['con_pass']=$GLOBALS['Con_pass'];
 			$_SESSION['gender']=$GLOBALS['gender'];
 			$_SESSION['day']=$GLOBALS['day'];
 			$_SESSION['month']=$GLOBALS['month'];
 			$_SESSION['year']=$GLOBALS['year'];
 			$dob = $_SESSION['day'].$_SESSION['month'].$_SESSION['year'];


 			$n=$_SESSION['name'];
 			$e=$_SESSION['email'];
 			$u=$_SESSION['username'];
 			$p=$_SESSION['pass'];		
 			$g=$_SESSION['gender'];

 			$con= mysqli_connect('localhost','root','','guideme');

 			$query="INSERT INTO user VALUES ('', '$n', '$e','$u', '$p','user', '$g','30/10/1995' )";
 			$run =mysqli_query($con,$query);
 			if($run==true)
 			{
 				?>

 				<script >
 					
 					alert("Registration is done successfully !!");
 				</script>

 				<?php
 				$L=$_COOKIE['lastPage'];
				header('location:../View/'.$L);

 			}
 			else
 			{
 				?>

 				<script >
 					
 					alert("Error!! Try again ...");
 				</script>

 				<?php
 				header('location:../View/sign_up.php');

 			}
			
 			
 		}
 		else
 		{

 			?>

 				<script >
 					
 					alert("Error!! Try again ...");
 				</script>

 				<?php

 			// clearing Globals arr
 			echo "<br>Inside false !";
 			$GLOBALS['name']="";
 			$GLOBALS['email']="";
 			$GLOBALS['username']="";
 			$GLOBALS['pass']="";
 			$GLOBALS['Con_pass']="";
 			$GLOBALS['gender']="";
 			$GLOBALS['day']="";
 			$GLOBALS['month']="";
 			$GLOBALS['year']="";




 			header('location:../View/sign_up.php');
 		}	
		
 	}



	if( isset($_POST["val_total"]) )	
	{
		Validate_registration();
	}			
	


	
?>