<?php

     
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cse";

// Create connection
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    $dbconfig = mysqli_select_db($conn, "cse")  ;
    // echo "Connected";
}
//echo "connected";
	 

?>