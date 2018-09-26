<?php

if(isset($_REQUEST["logout_submit"]))
{
		setcookie('id',$_COOKIE['id'],time()-333,'/');
		//unset($_COOKIE['id']);
		$L=$_COOKIE['lastPage'];
		header('Location:../View/'.$L);
}

else
{
	echo $_REQUEST['id']."  ".$_REQUEST['nme'];
	setcookie('id',$_COOKIE['id'],time()-333,'/');
	setcookie('i',$_REQUEST['id'],time()-3600,'/');
	setcookie('n',$_REQUEST['nme'],time()-3600,'/');

	setcookie('Temp_nme',$_REQUEST['nme'],time()+3,'/');
	setcookie('Temp_id',$_REQUEST['id'],time()+3,'/');
	$L=$_COOKIE['lastPage'];
		header('Location:../View/'.$L);
}


?>