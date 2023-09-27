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
    <link rel="stylesheet" href="style(update).css">
    <!-- <link rel="stylesheet" href="style(l).css"> -->

    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>

    <title>Student Edit Form</title>

    <!-- <style>
        body{
            background-color: #f9f9ff;
        }
        h1{
            font-weight: 900;
            margin-top: 10rem;
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
    </style>
    -->
  
</head>
<body>
<?php 
    include_once("headers.php");
?>
 
<div class='courses'>
<?php
 include_once("dbcsemanager.php");
$id = $_GET['id']; // get id through query string
$query = "SELECT * from student_details where id ='$id'";
$query_run= mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($query_run); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
        $student_Name = $_POST['student_Name'];
        $personal_link = $_POST['personal_link'];
        $filename = $_FILES["student_image_file"]["name"];
        $tempname = $_FILES["student_image_file"]["tmp_name"];    
        $folder = "../image_file/".$filename;

	
    $edit = mysqli_query($conn,"update student_details set student_Name='$student_Name',student_image= '$filename',
    personal_link= '$personal_link' where id = '$id'");

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
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:update_student"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<center>
<div class="data faculty shadow-lg">

    <h1 class='course_heading'>Update Student Data</h1>
    <br>
<form method="POST" enctype="multipart/form-data">

<div class="form">
    <label class="form-label" for="Name">Full Name:</label>
    <input class="textbox" type="text" name="student_Name" id="student_Name" value="<?php echo $data['student_Name'] ?>" placeholder="Enter Name" Required>
</div>
<br>


<div class="form">
    <label class="form-label" for="personal_link">Personal Link (if any):</label>
    <input class="textbox" type="text" name="personal_link" id="personal_link" value="<?php echo $data['personal_link'] ?>" placeholder="Enter Link">
</div>
<br>

<div class="form">
    <label class="form-label" for="student_image_file">Image</label>
    <input class="textbox" type="file" name="student_image_file" id="student_image_file" value="<?php echo $data['student_image'] ?>" required=" ">
</div>
<br>

                        

  <button type="submit" name="update" value="Update">  Update </button>

</form>
</div>
</center>
</div>
<?php 
    include_once("footers.php");
?>
</body>
</html>