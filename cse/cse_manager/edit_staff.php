<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IITGN.png" type="image/png">

    <!--css stylesheets-->
    <!-- <link rel="stylesheet" href="../css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://use.fontawesome.com/1ba730f8ee.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.3/r-2.2.9/sc-2.0.5/datatables.min.js"></script>
    <script src="..\js/bootstrap.bundle.min.js"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    
    <link rel="stylesheet" href="style(header).css">
    <link rel="stylesheet" href="style(footer).css">
    <link rel="stylesheet" href="style(update).css">
    <!-- <link rel="stylesheet" href="style(l).css"> -->

    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
    
    <title>Staff Edit Form</title>

    <!-- <style>
        body{
            background-color: #f9f9ff;
        }
        h1{
            font-weight: 900;
            margin-top: -15rem;
            text-align: center;
        }
        button{
            cursor: pointer;
            padding: 4px;
            border-radius: 20px;
            font-weight: 600;
        }
        button:hover{
            /* border: none; */
            color: #fff;
            background-color: #0070FF;
            /* transform: translateY(-0.5px); */
        }
        button{
            transition: background 1s, transform 0.9s;
        }
        .form-label{
            margin-left: -10rem;
        }
    </style> -->


</head>
<body>
 
<?php 
      include_once("headers.php");
?>
<div class='courses'>
<?php

include_once("dbcsemanager.php");
$id = $_GET['id']; // get id through query string
$query = "SELECT * from staff_details where id ='$id'";
$query_run= mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($query_run); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
        $staff_Name = $_POST['staff_Name'];
        $about = $_POST['about'];
        $personal_link = $_POST['personal_link'];
        $email_id = $_POST['email_id'];

        $filename = $_FILES["staff_image_file"]["name"];
        $tempname = $_FILES["staff_image_file"]["tmp_name"];    
        $folder = "../image_file/".$filename;
	
    $edit = mysqli_query($conn,"update staff_details set staff_Name='$staff_Name', about='$about',
    personal_link= '$personal_link',staff_image= '$filename', email_id = '$email_id' where id = '$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:update_staff"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }  
    
    if (move_uploaded_file($tempname, $folder)){
        $msg = "Image uploaded successfully";
        echo " <h1>New Image uploaded successfully</h1>";
        echo "<h1> Name Is ".$filename."</h1><br>";
        echo $folder."<br>";
    }
    else{
        $msg = "Failed to upload image";
        echo " <h1>New Image not uploaded successfully</h1>";
        echo "<h1> Name Is ".$filename."</h1><br>";
        echo $folder."<br>";
    }
	
}
?>

<center>
<div class="data staff shadow-lg">

    <h1 class='course_heading'>Update Staff Data</h1>
    <br>
    <form method="POST" enctype="multipart/form-data">
  

<div class="form">
    <label class="form-label" for="staff_name">Full Name:</label>
    <input class="textbox" type="text" name="staff_Name" id="staff_Name" value="<?php echo $data['staff_Name'] ?>" placeholder="Enter Name" Required>
</div>
<br>

<div class="form">
    <label class="form-label" for="about">about:</label>
    <input class="textbox" type="text" name="about" id="about" value="<?php echo $data['about'] ?>" placeholder="Enter Name" Required>
</div>
<br>


<div class="form">
    <label class="form-label" for="personal_link">Personal Link (if any):</label>
    <input class="textbox" type="text" name="personal_link" id="personal_link" value="<?php echo $data['personal_link'] ?>" placeholder="Enter Link">
</div>
<br>


<div class="form">
    <label class="form-label" for="email_id">Email ID:</label>
    <input class="textbox" type="text" name="email_id" id="email_id" value="<?php echo $data['email_id'] ?>" placeholder="Enter Email" readonly>
</div>
<br>


<div class="form">
    <label class="form-label" for="staff_image_file">Image</label>
    <input class="textbox" type="file" name="staff_image_file" id="staff_image_file" value="<?php echo $data['staff_image'] ?>" required=" ">
</div>
<br>
            
                    
<button type="submit" name="update" value="Update">  Update </button>
<br>

</form>
</div>
</center>
</div>
<?php 
      include_once("footer.php");
?>
</body>
</html>