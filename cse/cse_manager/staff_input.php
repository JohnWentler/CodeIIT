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
  
    <title>Staff Data Form</title>
    
    <!-- <style>
        body{
            background-color: #f9f9ff;
        }
        .staff h1{
            font-size: 2rem;
            font-weight: 600;
            font-family: 'EB Garamond', serif;
            text-align: center;
        }
        .staff{
            margin-top: 6rem;
            padding: 4rem;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 10px 10px 2px -4px rgba(0, 0, 0, 0.25);
        }
        
        button{
            cursor: pointer;
            padding: 0.5rem 7rem;
            border: none;
            border-radius: 7px;
            font-weight: 900;
         
        }
        button:hover{
            color: #ffffff;
            border: none;
            background-color: #0070FF;
            transform: translateY(-0.5px);
        }
        button{
            transition: background 1s, transform 0.9s;
        }
    </style>
     -->
</head>
  
<body>
<?php 
    include_once("Headers.php");
?>

<center>
    <div class="data staff shadow-lg">
    <h1><i class="fa-solid fa-user"></i> New Add Staff Database</h1><br>
<!-- <table  cellpadding=10px  cellspacing=5px style= "border:none";> -->
        <form action="staff_input" method="post" enctype="multipart/form-data">

        <table>
            <tbody>
                <tr>
                    <th><label class="form-label" for="Name">&nbsp; Full Name:</label></th>
                    <th><input class="textbox" type="text" placeholder="Enter Full Name" name="staff_Name" id="staff_Name" required></th>
                </tr>

                <tr>
                    <th><label class="form-label" for="about">&nbsp; About:</label></th>
                    <th><input class="textbox" type="text" placeholder="Enter Email id" name="about" id="about" required></th>
                </tr>

                <tr>
                    <th><label class="form-label" for="email_id">&nbsp; Email ID:</label></th>
                    <th><input class="textbox" type="text" placeholder="Enter Email id" name="email_id" id="email_id" required></th>
                </tr>

                <tr>
                    <th><label class="form-label" for="personal_link">&nbsp; Personal Link (if any):</label></th>
                    <th><input class="textbox" type="text" placeholder="Enter Personal Link" name="personal_link" id="personal_link" required></th>
                </tr>

                <tr>
                    <th><label class="form-label" for="image">&nbsp; Display image:</label></th>
                    <th><input class="textbox" type="file"  name="staff_image_file" id="staff_image_file" required=" "</th>
                </tr>

                
            </tbody>
        </table>


        <!-- <div class="form">
            <label class="form-label" for="Name">&nbsp; Full Name:</label>
            <input class="textbox" type="text" placeholder=" " name="staff_Name" id="staff_Name">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="email_id">&nbsp; Email ID:</label>
            <input class="textbox" type="text" placeholder=" " name="email_id" id="email_id">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="personal_link">&nbsp; Personal Link (if any):</label>
            <input class="textbox" type="text" placeholder=" " name="personal_link" id="personal_link">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="image">&nbsp; Display image:</label>
            <input class="textbox" type="file" placeholder=" " name="staff_image_file" id="staff_image_file">
        </div>
        <br> -->

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
        $staff_Name = $_REQUEST['staff_Name'];
        $personal_link = $_REQUEST['personal_link'];
        $email_id = $_REQUEST['email_id'];
        $filename = $_FILES["staff_image_file"]["name"];
        $tempname = $_FILES["staff_image_file"]["tmp_name"];    
        $folder = "../staff_image_file/".$filename;
        
          
        // Performing insert query execution
        // here our table name is csefaculty
        $sql = "INSERT INTO staff_details (staff_Name,email_id, personal_link, staff_image) VALUES ('$staff_Name','$email_id','$personal_link','$filename')";
          
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
                . mysqli_error($conn)
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