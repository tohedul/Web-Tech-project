<?php
	function text_Alpha($name)
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

	function text_num($name)
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

	function text_speCh($name)
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


	function Validate_name($name)
	{
		$f=false;
		$p=0;
		$N="";

		if($name =="")
		{
			echo "NAME field can not be EMPTY !!<br/><hr>";   // check point A
		}
		else   // check point B + C + D
		{ 
			if( str_word_count($name) < 2)
			{
				echo "Name should contain at least 2 words...<br/><hr>";   // check point B
			}
			else
			{				
				for ($i=0; $i < strlen($name) ; $i++) 
				{ 		
					if( $name[$i] == " "|| $name[$i] == "-" ) {$p++;}        // count partioners
					else{ $N = $N.$name[$i]; }                               // exclude partioners 
				}

				$len =	strlen($N) ;

				for ($i=0; $i < $len ; $i++) 
				{ 			
					if( ( ord($N[$i])>= ord('A') && ord($N[$i])<= ord('Z') ) ||( ord($N[$i])>= ord('a') && ord($N[$i])<= ord('z') )  )     // Chech point D
					{
						
						echo "$name <br/><hr>";
						$f=true;
				    }
					else
					{
						echo "Name Must conatain letters only ...<br/><hr>";    // check point C
						$f=false;
						break;
					}	
				}

				return $f;
			}	
	    }
    }
/* ------------------------------------------------------- Validate_name() Ends -----------------------------------------------------------*/


/*---------------- Validate_User_Type() Starts -----------------------*/




	




/* ------------------------------------------------------- Validate_User_type() Ends ------------------------------------------------------*/


/*---------------- Validate_Gender() Starts -----------------------*/




	function Validate_Gender($gen)
	{
		$f=true;
		
			if($gen=="Male")
			{
				echo "The Male option is selected .... No problem<br/><hr>";
			}
			else if($gen=="Female")
			{
				echo "The Female options is selected .... No problem<br/><hr>";
			}
			else if($gen=="Other")
			{
				echo "The Other options is selected .... No problem<br/><hr>";
			}
			else
			{
				echo "Any one Option Must be selected !! <br/> <hr>";
				$f=false;
			} 
			return $f;
	}




/* ------------------------------------------------------- Validate_Gender() Ends ------------------------------------------------------*/

////////// Email Validation:

	function Validate_Email($Email)
	{
		$f=false; 	
		if($Email =="")
		{
			echo "Email field can not be EMPTY !!<br/><hr>";   
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
						echo "Email formate not Correct...<br/><hr>";  
					}
					else 
					{
						echo $Email;
						$f=true;
					}
				}	
				else
				{
					echo "Email formate not Correct...<br/><hr>";
				} 
					
		    }
			else
			{
				echo "Name Must be start with a letter ...<br/><hr>";   
			}	
	    }
	    return $f;
	}

/*---------------------------------------------Validate_Email() Ends -------------------------------*/



///////////// DOB validation:

  function Validate_DOB($date,$month,$year)
  {
  		$df=false;
  		$mf=false;
  		$yf=false;
  		if($date=="")
  		{
  			echo "  Date can not be Empty  !!   "."<br/><hr>";
  		}
  		else if( 0 < $date && $date < 32 )
  		{
  			if( $year%4 != 0 && $month==2 && $date > 28 )
  			{
	  			echo "  date in February can not be greater than 28  "."<br/><hr>";	  			
  			}
  			else if( $year%4 == 0 && $month == 2 && $date > 29 )
  			{
	  			echo "  date in February in leap year can not be greater than 29  "."<br/><hr>";	  			
  			}
  			else
  			{
  				echo "DOB: <br/><hr> DAY: ".$date."<br/><hr>";
  				$df=true;
  			}
  		}
  		else
  		{
  			echo "   wrong Input in Date field ...   "."<br/><hr>";
  		}



  		if($month=="")
  		{
  			echo "Month can not be Empty  !!"."<br/><hr>";
  		}
  		else if( 0 < $month && $month < 13 )
  		{
  			echo "  month : ".$month."<br/><hr>";
  			$mf= true;
  		}
  		else
  		{
  			echo "   wrong Input in Month field ...   "."<br/><hr>";
  		}



  		if($year=="")
  		{
  			echo "   Year can not be Empty  !!    "."<br/><hr>";
  		}
  		else if( 1953 < $year && $year < 2000 )
  		{
  			echo "   year :   ".$year."<br/><hr>";
  			$yf= true;
  		}
  		else
  		{
  			echo "   wrong Input in Year field ...   "."<br/><hr>";
  		}



  		if($df && $mf && $yf )
  		{
  			return true;
  		}
  		else
  		{
  			return false;
  		}
  }

  /* ------------------------------ DOB Validation ends ----------------------  */ 





 ///////// Degree Validation starts:

  function Validate_Degree()
	{
		if( empty($_POST["degree"]) )
		{
			echo " Any of the options MUST BE selected .... !!";
		}
		else
		{
			$c = 0 ;
			foreach ($_POST["degree"] as $degree) {
				$c++;
				echo $degree.'<br/>';
			}

			if($c < 2)
			{
				echo '<br/>'."<p> => At least 2 options must be selected ... </p> ";
			}
			else
			{
				echo '<br/>'."<p> No problem ... Minimum/ more than 2 options are selected !!</p> ";
			}
		} 
	}
 /* ---------------------------------- Degree Validation ends ------------ */ 


//////// Blood Group validity check:

 function Validate_bGroup($bg)
	{
		if($bg==null)
		{
			echo " Any of the options MUST BE selected .... !!";
		}
		else
		{
			if($bg=="none")
			{
				echo "Any of the Blood groups MUST BE selected .... !!";
			}
			else if($bg=="A+")
			{
				echo "Blood group A+ is selected .... No problem";
			}
			else if($bg=="A-")
			{
				echo "Blood group A- is selected .... No problem";
			}
			else if($bg=="B+")
			{
				echo "Blood group B+ is selected .... No problem";
			}
			else if($bg=="B-")
			{
				echo "Blood group B- is selected .... No problem";
			}
			else if($bg=="AB+")
			{
				echo "Blood group AB+ is selected .... No problem";
			}
			else if($bg=="AB-")
			{
				echo "Blood group AB- is selected .... No problem";
			}
			else if($bg=="O+")
			{
				echo "Blood group O+ is selected .... No problem";
			}
			else if($bg=="O-")
			{
				echo "Blood group O- is selected .... No problem";
			}
		} 
	}

	/* -------------------------------- BG validation ends -------------------------------------------------*/




	////////// Login validity:

	function Validate_Login($n,$p)
	{
		
		$uf=false;
		$pf=false;

		if(text_Alpha($n) || text_num($n) )
		{
			if(strlen($n) <2)
			{
				echo " User Name:  At least 2 charecter needed ...<br/> <hr>";
			} 
			else
			{
				$uf=true;
				echo " User Name: ".$n.'<br/><hr>';
			}
		}

		if(   strlen($p) <8   )
		{
			
			echo "Password: At least 8 charecter needed ...<br/><hr> ";
		} 
		else
		{
			if(text_speCh( $p))
			{
				echo " Pass: ".$p.'<br/>';
				$pf=true;
			}
			else
			{
				echo " At least one special charecter needed ... <br/><hr>";
			}
		}
		
		if($uf && $pf)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	/*------------------------------------------------------------ LOgin check ends ------------------------------------- */


	/// Pass change Validity:

	function Validate_Pass_change($c,$n,$r)
	{			
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
			echo "<br/>New password should be different<br/>";
		}
		else
		{
			echo "<br/>Old: ". $c."<br/> New: ".$n;
		}

		if(!$flg2)
		{
			echo "<br/>New password & Re pass should be same<br/>";
		}
		else
		{
			echo "<br/>New: ". $n."<br/> Re: ".$r;
		}


	}




/*------------------------------------------------------------ LOgin check ends ------------------------------------- */


 // pro pic validity:


  function Validate_Pic()
  {
  	$target_dir = "downloads/";
	$target_file = $target_dir . basename($_FILES["img"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

	    $check = getimagesize($_FILES["img"]["name"]);
	    if($check !== false) {
	        echo "The file is an image - <br/> Type: " . $check["mime"] . ".<br/>";
	        $uploadOk = 1;
	    } else {
	        echo "The file is not an image.<br/>";
	        $uploadOk = 0;
	    }
	
	// Check if file already exists
	if ( file_exists($target_file) ) 
	{
	    echo "Sorry, file already exists.<br/>";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["img"]["size"] > 5241880) 
	{
	    echo "Sorry, your file is too large<br/>";
	    $uploadOk = 0;
	}
	else
	{
		echo "Image size ok<br/>";
	}	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) 
	{
	    echo "Sorry, only JPG, JPEG & PNG  files are allowed.<br/>";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) 
	{
	    echo "Sorry, your file was not uploaded.<br/>";
	// if everything is ok, try to upload file
	} 
	else 
	{

	    if (  move_uploaded_file($_FILES["img"]["tmp_name"], $target_file) )
	    {
	        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.<br/>";
	    } 
	    else
	    {
	        //echo "Sorry, there was an error uploading your file.<br/>";
	    }
	}

  }



  /* ----------------------------------- Pic Validity Ends ----------------------------------------- */


///// validity check of Confirm Password:

  function Validate_ConPass($p,$c)
  {
  	
	if($p==""||$c=="" )
	{ 	if($p=="")
	  	{
	  		echo "Password field can not be empty!!<br/><hr>";
	  	}

	  	if($c=="")
	  	{
	  		echo "Confirm Password field can not be empty!!<br/><hr>";
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
			echo "<br/> Password & Con pass should be same!!<br/>";
		}
		else
		{
			echo "Pass: ". $p."<br/> Conf Pass : ".$c."<br/><hr>";

		}
		return $flg1;
	}
  }



  function Validate_story($date,$month,$year,$place)
  {
  		$df=false;
  		$mf=false;
  		$yf=false;
  		$pf=false;

  		if($place=="")
  		{
  			echo "  Place field can not be Empty  !!   "."<br/><hr>";
  		}
  		else
  		{
  			$pf=true;
  		}

  		if($date=="")
  		{
  			echo "  Day can not be Empty  !!   "."<br/><hr>";
  		}
  		else if( 0 < $date && $date < 32 )
  		{
  			if( $year%4 != 0 && $month==2 && $date > 28 )
  			{
	  			echo "  date in February can not be greater than 28  "."<br/><hr>";	  			
  			}
  			else if( $year%4 == 0 && $month == 2 && $date > 29 )
  			{
	  			echo "  date in February in leap year can not be greater than 29  "."<br/><hr>";	  			
  			}
  			else
  			{
  				echo "DAY: ".$date."<br/><hr>";
  				$df=true;
  			}
  		}
  		else
  		{
  			echo "   wrong Input in Date field ...   "."<br/><hr>";
  		}



  		if($month=="")
  		{
  			echo "Month can not be Empty  !!"."<br/><hr>";
  		}
  		else if( 0 < $month && $month < 13 )
  		{
  			echo "  month : ".$month."<br/><hr>";
  			$mf= true;
  		}
  		else
  		{
  			echo "   wrong Input in Month field ...   "."<br/><hr>";
  		}



  		if($year=="")
  		{
  			echo "   Year can not be Empty  !!    "."<br/><hr>";
  		}
  		else if($year < 2019 )
  		{
  			echo "   year :   ".$year."<br/><hr>";
  			$yf= true;
  		}
  		else
  		{
  			echo "   wrong Input in Year field ...   "."<br/><hr>";
  		}



  		if($df && $mf && $yf && $pf )
  		{			
  			header("Location:story.php");
  		}
  		
  }

// ---------------------------- Val_Story() ends ------------------------- //
  
	/////////////// All Check ///////////

	
	if( isset($_POST["val_total"])  )   // sign up
	{		
			echo "<h1>Registered Information / status: </h1> <br/><br/>";
   			Validate_name($_POST["name"]);
   			Validate_Email($_POST["email"]);
   			Validate_Login($_POST["Name"],$_POST["password"]);
   			Validate_ConPass($_POST["password"],$_POST["con_Password"]);
   			Validate_Gender($_POST["gen"]);
   			Validate_DOB($_POST["date"],$_POST["month"],$_POST["year"]);
   			

	}
	else if(isset($_POST["val_total_re"]) )    //  Reset
	{		
   		header("Location:sign_up.php");		
	}
	else if(isset($_POST["submit_story"]) )    //  Story
	{		
   			Validate_story($_POST["day"], $_POST["month"], $_POST["year"], $_POST["place"])	;   
	}

	
?>