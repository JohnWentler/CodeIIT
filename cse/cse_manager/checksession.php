<?php
 //ob_start();
 session_start();

 if(isset($_SESSION['user']))
 {
	 
	}
	else
	{
	  echo "seesion is time out....";
	 header("location:index");	
	}
	
	//ob_end_flush();
	//ob_end_clean();
?>