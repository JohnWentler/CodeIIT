<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="IITGN.png" type="image/png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
  
  <link rel="stylesheet" href="style(header).css">
  <link rel="stylesheet" href="style(footer).css">
  <link rel="stylesheet" href="style(password).css">
   

  <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
    
  <title>Change password</title>

<!-- <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body{
    width: 100%;
    height: 100vh;
    display: grid;
    place-items: center;
    color: rgb(0, 0, 0); 
    background-color: #f9f9ff;
  }
  .courses{
    width: 100%;
    margin-top: 6rem;
    padding: 3rem;
    background-color: #fff;
    border-radius: 20px;
    box-shadow: 10px 10px 2px -4px rgba(0, 0, 0, 0.25);
  }
  h1{
    /* color: #0070FF; */
    font-size: 25px;
    font-weight: 900;
    text-align: center;
  }
  .courses .btn{
    background-color:  #e9ecef;
    cursor: pointer;
    padding: 0.5rem 7rem;
    border: none;
    border-radius: 5px;
    font-weight: 600;
  }
  .courses .btn:hover{
    /* border: none; */
    color: #fff;
    background-color: #0070FF;
    /* transform: translateY(-0.5px); */
  }
  .courses .btn{
    transition: background 1s, transform 0.9s;
  }
    /* ==========================PASSWORD============================== */
    
</style> -->

   
</head>
<body>
 
<?php 
  include_once("headers.php");
?>

<center>
<div class='courses'>


<h1 class='course_heading'><i class="fa-solid fa-lock"></i> Change Password</h1>
<br>
<!-- <form action="" method="POST" class=".form-horizontal" enctype="multipart/form-data"> -->
<form action="" method="POST" class=".form-horizontal" enctype="multipart/form-data">
  
<div class="form">
  <label class="form-label"></label>
  <input class="form-control" type="email" value="<?php echo $_SESSION["user"];?>" name="email" readonly="readonly" Required>
</div>



<div class="form">
  <label class="form-label" for="op"> </label>
  <input class="form-control" type="password" name="op" id="op" placeholder="Old Password" Required>
  <!-- <span><i class="fa-sharp fa-regular fa-eye"></i></span> -->
</div>



<div class="form">
  <label class="form-label" for="np"></label>
  <input class="form-control" type="password" name="np" id="np" placeholder="New Password" Required>
  <!-- <span><i class="fa-sharp fa-regular fa-eye"></i></span> -->
</div>



<div class="form">
  <label class="form-label" for="cnp"></label>
  <input class="form-control" type="password" name="cnp" id="cnp" placeholder="Confirm Password" Required>
  <!-- <span><i class="fa-sharp fa-regular fa-eye"></i></span> -->
</div>
<br>

<button type="submit" class="btn" name="submit" value="Update">  Update </button>

</form>
</center>

</div>

<center>

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
  else
  {

    $a= $_POST["email"];
    $b= $_SESSION["pswd"];
    $c= md5($_POST["op"]);
    $d= md5($_POST["np"]);
    $e= md5($_POST["cnp"]);
    // echo '<br>';
    // echo $a;
    // echo '<br>';

    
    
    if($b == $c){
      if($d == $e){
        include_once("dbcsemanager.php");
        $epass = md5($d);
        // echo $epass; 
        // $sql = "UPDATE login SET pass='$d' WHERE uname='$a'";
        
        echo '<br>';
        $sql = "UPDATE login SET email = '$a', password = '$d' WHERE email = '$a'";
        

        $mi = mysqli_query($conn,$sql);
        // print_r($sql); to check details QUERY
        // echo $d; to check PWD in md5-LT
        if($mi){
          //echo "Faculty Designation added";
          $_SESSION["pswd"] = $b;
          echo '<script language="javascript">';
          echo 'alert("Password Change succeesfully")';
          echo '</script>';
          // header("location:viewfacultyprofile.php?msg=Profile Update Successfully  ");
          //   exit();
        }
        else{
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
</center>



<?php 
  include_once("footers.php");
?>
</body>
</html>