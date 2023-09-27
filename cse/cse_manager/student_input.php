<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IITGN.png" type="image/png">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style(header).css">
    <link rel="stylesheet" href="style(footer).css">
    <link rel="stylesheet" href="style(input).css">

    <!-- <link rel="stylesheet" href="style(l).css"> -->

    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
   
    <title>student data form</title>

    
</head>
  
<body>

<?php 
    include_once("Headers.php");
?>
<center>
    <div class="data student shadow-lg">
    <!-- <h1 ><i class="fa-solid fa-graduation-cap"></i> New Add Student Database</h1> -->
    <h1 ><i class='fas fa-user-graduate' style='font-size:48px;color:black'></i> New Add Student Database</h1>
    <br> 
    <!-- <table  cellpadding=10px  cellspacing=5px style= "border:none";> -->
        <form action="student_input" method="post" enctype="multipart/form-data">


        <div class="form">
            <label class="form-label" for="Name">&nbsp; Full Name:</label>
            <input class="textbox" type="text" placeholder="Enter Full Name " name="student_Name" id="student_Name" Required>
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="personal_link">&nbsp; Personal Link (if any):</label>
            <input class="textbox" type="text" placeholder="Enter Personal Link" name="personal_link" id="personal_link">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="image">&nbsp; Display image:</label>
            <input class="textbox" type="file" placeholder=" " name="student_image_file" id="student_image_file" Required= " ">
        </div>
        <br>


        <div style="margin:10px">
            <button type="submit" name="upload">UPLOAD</button>
        </div>

        </form>
    </div>

        <?php
        $msg = "";
        // servername => localhost
        // username => root
        // password => empty
        // database name => csewebsite
        if (isset($_POST['upload'])) {
                  
            include_once("dbcsemanager.php");
          
         
        // Taking all values from the form data(input)
        $student_Name = $_REQUEST['student_Name'];
        $personal_link = $_REQUEST['personal_link'];
        $filename = $_FILES["student_image_file"]["name"];
        $tempname = $_FILES["student_image_file"]["tmp_name"];    
        $folder = "../student_image_file/".$filename;
        
          
        // Performing insert query execution
        // here our table name is csefaculty
        $sql = "INSERT INTO student_details (student_Name, personal_link, student_image) VALUES ('$student_Name','$personal_link','$filename')";
          
        if(mysqli_query($conn, $sql)){
            // echo "<h3>data stored in a database successfully." 
            //     . " Please browse your localhost php my admin" 
            //     . " to view the updated data</h3>"; 
            echo "
            <script type= 'text/javascript'>
                alert('New record created successfully');
            </script>";
  
            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else{
            echo " <script type= 'text/javascript'>
            ERROR: Hush! Sorry $sql.  
                .mysqli_error($conn)
            </script>";
        }
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
        // Close connection
        mysqli_close($conn);
    }
        ?>
    </center>

    <br>
    <br>
    <br>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<?php 
      include_once("Footers.php");
?>
</body>
</html>