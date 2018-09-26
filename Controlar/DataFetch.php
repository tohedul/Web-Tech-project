<?php
  $file=fopen("Dhaka_Hotel.txt","r");

  while(!feof($file)) 
  {
  	$str= fgets($file);
  	echo "<br/>".$str;
  }

  fclose($file);


?>