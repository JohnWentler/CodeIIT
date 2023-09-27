<?php 
  include_once("admin_header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
</head>
<body>

<div class="container">
  <h2><center>Change Password</center></h2>
  <hr>
</br>
</br>
  <form action="" method="POST" class=".form-horizontal">
  
	
    <div class="form-group">
      <label for="email">Email Id:</label>
      <input type="email"  value="<?php echo $_SESSION["user"];?>" class="form-control"  name="email" readonly="readonly">
    </div>
    <div class="form-group">
        <label for="op">Old Password:</label>
        <input type="password"  class="form-control"   name="op" >
      </div>
      <div class="form-group">
        <label for="np">New Password:</label>
        <input type="password"  class="form-control"   name="np" >
      </div>
      <div class="form-group">
        <label for="cnp">Confirm New Password:</label>
        <input type="password"  class="form-control"   name="cnp" >
      </div>

    <button type="submit" name="submit" class="btn btn-primary btn-block" style="background-color: #3498DB;">Update</button>
  </form>
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
  if(empty($_POST['op'])){

    echo '<script language="javascript">';
    echo 'alert("Please Add Old Password")';
    echo '</script>';
}
else if(empty($_POST['np'])){

  echo '<script language="javascript">';
  echo 'alert("Please Add New Password")';
  echo '</script>';
}
else if(empty($_POST['cnp'])){

  echo '<script language="javascript">';
  echo 'alert("Please Add Confirm New Password")';
  echo '</script>';
}
else{

  $a=$_POST["email"];
	$b= $_SESSION['pswd'];
	$c= md5($_POST["op"]);
	$d= md5($_POST["np"]);
  $e= md5($_POST["cnp"]);
   
  
  if($b == $c)
  {
    if($d == $e)
    {
      include_once("dbcsemanager.php");
      $epass = md5($d);
      $sql = "UPDATE login SET pass='$d' WHERE uname='$a'";
      $mi = mysqli_query($conn,$sql);
      //echo $sql;
      if($mi)
     {
        //echo "Faculty Designation added";
        $_SESSION['pswd'] = $d;
        echo '<script language="javascript">';
        echo 'alert("Password Change succeesfully")';
        echo '</script>';
     // header("location:viewfacultyprofile.php?msg=Profile Update Successfully  ");
   //   exit();
     }
     else
     {
       //echo "Already Added";
       echo '<script language="javascript">';
       echo 'alert("Unknown Erorrrr.")';
       echo '</script>';
       //die("Connection failed: " . mysqli_error($conn));
     //header("location:message.php?msg=This Faculty Already Registered.. ");
     
     }
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Confrim New Password Different")';
      echo '</script>';
    }

  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Old Password Not Match")';
    echo '</script>';

  }

	 
	 
    
   //mysql_query("commit");
   // mysql_close($sql);
    
}
   
}
?>



<?php 
  include_once("footers.php");
?>