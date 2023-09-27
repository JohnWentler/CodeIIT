<?php
 //ob_start();
 session_start();

 if(isset($_SESSION['user']))
 {          

	header("location:home");
	 
	}
	else
	{
	  
	// header("location:index");	
	}
	
	//ob_end_flush();
	//ob_end_clean();
?>