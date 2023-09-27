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
<link rel="stylesheet" href="style(update).css">

<!-- <link rel="stylesheet" href="style(l).css"> -->

<script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>

<title>insert faculty</title>

</head>
<body>

<?php 
    include_once("Headers.php");
?>
<center>
<div class="data faculty shadow-lg">
    <h1><i class="fa-solid fa-user"></i> New Add Faculty Database</h1><br>
    <!-- <table  cellpadding=10px  cellspacing=5px style= "border:none";> -->
        <form action="faculty_input" method="post" enctype="multipart/form-data">
        <table border=1>
                <tbody>
                    <tr>
                        <th><label class="form-label" for="fullName">Full Name:</label></th>
                        <th><input class="textbox" type="text" placeholder=" Enter Full Name"name="full_name" id="full_name" required></th>
                    </tr>

                    <tr>
                        <th><label class="form-label" for="designation" >Designation:</label></th>
                        <th><input class="textbox" type="text" placeholder=" Enter Designation" name="designation" id="designation" required></th>
                    </tr>


                    <tr>
                        <th><label class="form-label" for="Email address">Email Address:</label></th>
                        <th><input class="textbox" type="text" placeholder="Enter Email_ID" name="email_id" id="email_id" required></th>
                    </tr>


                    <tr>
                        <th><label class="form-label" for="google_scholar">Google Scholar Link:</label></th>
                        <th><input class="textbox" type="text" placeholder="Enter Google Scholar link" name="google_scholar" id="google_scholar" ></th>
                    </tr>

                    <tr>
                        <th><label class="form-label" for="dblp_link">&nbsp; DBLP Link:</label></th>
                        <th><input class="textbox" type="text" placeholder="Enter DBLP Link" name="dblp_link" id="dblp_link"></th>
                    </tr>


                    <tr>
                        <th><label class="form-label" for="personal_link">Personal Link (if any):</label></th>
                        <th><input class="textbox" type="text" placeholder="Enter Personal Link" name="personal_link" id="personal_link"></th>
                    </tr>


                    <tr>
                        <th><label class="form-label" for="image_file">Display image:</label></th>
                        <th><input class="textbox" type="file" placeholder=" " name="image_file" id="image_file" required= " "></th>
                    </tr>


                
                </tbody>

            
      

        <!-- <div class="form">
            <label class="form-label" for="fullName">&nbsp; Full Name:</label>
            <input class="textbox" type="text" placeholder=" Enter Full Name"name="full_name" id="full_name">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="designation">&nbsp; Designation:</label>
            <input class="textbox" type="text" placeholder=" Enter Designation" name="designation" id="designation">
        </div>
        <br> -->

        <!-- <div class="form">
            <label class="form-label" for="lastName">&nbsp; Last Name:</label>
            <input class="textbox" type="text" placeholder=" " name="last_name" id="last_name">
        </div>
        <br> -->

        <!-- <div class="form">
            <label class="form-label" for="Email address">&nbsp; Email Address:</label>
            <input class="textbox" type="text" placeholder="Enter Email_ID" name="email_id" id="email_id">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="google_scholar">&nbsp;Google Scholar Link:</label>
            <input class="textbox" type="text" placeholder="Enter Google Scholar link" name="google_scholar" id="google_scholar">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="dblp_link">&nbsp; DBLP Link:</label>
            <input class="textbox" type="text" placeholder="Enter DBLP Link" name="dblp_link" id="dblp_link">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="personal_link">&nbsp; Personal Link (if any):</label>
            <input class="textbox" type="text" placeholder="Enter Personal Link" name="personal_link" id="personal_link">
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="image">&nbsp; Display image:</label>
            <input class="textbox" type="file" placeholder=" " name="image_file" id="image_file">
        </div>
        <br> -->

        

        
        </table>
        <div>
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
        $full_name =  $_REQUEST['full_name'];
        $designation =  $_REQUEST['designation'];
        // $last_name = $_REQUEST['last_name'];
        $email_id = $_REQUEST['email_id'];
        $google_scholar =  $_REQUEST['google_scholar'];
        $dblp_link = $_REQUEST['dblp_link'];
        $personal_link = $_REQUEST['personal_link'];
        $filename = $_FILES["image_file"]["name"];
        $tempname = $_FILES["image_file"]["tmp_name"];    
        $folder = "../img_file/".$filename;
        
        
        // Performing insert query execution
        // here our table name is csefaculty
        $sql = "INSERT INTO csefaculty (full_name, designation, email_id, google_scholar, dblp_link,personal_link, image_file) VALUES ('$full_name', '$designation',
            '$email_id','$google_scholar','$dblp_link', '$personal_link','$filename')";
          
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
                . mysqli_error($conn);
            </script>";
        }
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
            // echo $filename;
        }else{
            $msg = "Failed to upload image";
            // echo $filename;
        }
        // Close connection
        mysqli_close($conn);
    }
        ?>
</center>
    <!--Bootstrap Scripts-->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<?php 
      include_once("Footers.php");
?>
</body>
</html>