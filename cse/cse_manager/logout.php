<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['pswd']);
 
header("location:/cse/cse_manager");
//session_unset();
//session_destroy();
	 

?>