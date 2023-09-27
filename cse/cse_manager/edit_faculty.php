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
     
    <title>faculty Edit Form</title>

    <!-- <style>
        .data{
            max-width: 600px;
        }
        form{
            max-width: 700px;
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
        $query = "SELECT * from csefaculty where id ='$id'";
        $query_run= mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($query_run); // fetch data

        // $full_name = ($data['first_name'] ." ". $data['middle_name'] ." ".$data['last_name']);

        if(isset($_POST['update'])) // when click on Update button
        {
            $full_name =  $_POST['full_name'];
            $designation =  $_POST['designation'];
            $email_id = $_POST['email_id'];
            $google_scholar =  $_POST['google_scholar'];
            $dblp_link = $_POST['dblp_link'];
            $personal_link = $_POST['personal_link'];
           
            $filename = $_FILES["image_file"]["name"];
            $tempname = $_FILES["image_file"]["tmp_name"];    
            $folder = "../img_file/".$filename;
            
            $edit = mysqli_query($conn,"update csefaculty set full_name='$full_name',
            designation='$designation',email_id='$email_id',google_scholar='$google_scholar', dblp_link='$dblp_link',personal_link= '$personal_link',image_file = '$filename' where id = '$id'");

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";

           
            // echo $pp = move_uploaded_file($tempname, $folder);

            if (move_uploaded_file($tempname, $folder)){
                $msg = "Image uploaded successfully";
                echo "<h1> Image uploaded successfully<br>";
                echo "Img name " .$filename."<br>";
                echo $tempname;
            }
            else{
                $msg = "Failed to upload image";
                echo "<h1>failed Image not uploaded successfully<br>";
                echo "Img name " .$filename."<br>";
                echo $tempname;
            }

            if($edit)
            {
                mysqli_close($conn); // Close connection
                header("location:update_faculty"); // redirects to all records page
                exit;
            }
            else
            {
                echo 'mysqli_error()';
            }    	
            
        }
    ?>
    <center>
    <div class="data faculty shadow-lg">
        <h1 class='course_heading'><i class="fa-solid fa-user-pen"></i> Update Faculty Data</h1>
        <br>

        <form method="POST" enctype="multipart/form-data">

            <div class="form">
                <label class="form-label" for="fullName">Full Name:</label>
                <input class="textbox" type="text" name="full_name" id="first_name" value="<?php echo $data['full_name'] ?>" placeholder="Enter Full Name" Required>
            </div>
            <br>

            <div class="form">
                <label class="form-label" for="designation">Designation:</label>
                <input class="textbox" type="text" name="designation" id="designation" value="<?php echo $data['designation'] ?>" placeholder="Enter designation">
            </div>
            <br>

            <div class="form">
                <label class="form-label" for="Email address">Email Address:</label>
                <input class="textbox" type="text" name="email_id" id="email_id" value="<?php echo $data['email_id'] ?>" placeholder="Enter Email" Required readonly="readonly">
            </div>
            <br>

            <div class="form">
                <label class="form-label" for="google_scholar">Google Scholar Link:</label>
                <input class="textbox" type="text" name="google_scholar" id="google_scholar" value="<?php echo $data['google_scholar'] ?>" placeholder="Enter google scholar link">
            </div>
            <br>

            <div class="form">
                <label class="form-label" for="dblp_link">DBLP Link:</label>
                <input class="textbox" type="text" name="dblp_link" id="dblp_link" value="<?php echo $data['dblp_link'] ?>" placeholder="Enter DBLP Link" >
            </div>
            <br>

            <div class="form">
                <label class="form-label" for="personal_link">Personal Link (if any):</label>
                <input class="textbox" type="text" name="personal_link" id="personal_link" value="<?php echo $data['personal_link'] ?>" placeholder="Enter Personal Link" >
            </div>
            <br>

            <div class="form">
                <label class="form-label" for="image_file">Image </label>
                <input class="textbox" type="file" placeholder=" " name="image_file" id="image_file" value="<?php echo $data['image_file'] ?>"  required= " ">
            </div>
            <br>

                                
            

            <button type="submit" name="update" value="Update">Update</button>

        </form>


    </div>
    </center>
</div>

<?php 
    include_once("footers.php");
?>
</body>
</html>