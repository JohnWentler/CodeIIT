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
    <!-- <link rel="stylesheet" href="style(l).css"> -->

    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
     
    <title>CSE Update Profile</title>

    <style>
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
            width: 40rem;
            font-size: 14px;
            margin-top: 6rem;
            text-transform: uppercase;
            padding: 3rem;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 10px 10px 2px -4px rgba(0, 0, 0, 0.55);
        }
        h1{
            font-size: 25px;
            font-weight: 900;
            text-align: center;
        }
        button{
            text-transform: uppercase;
            cursor: pointer;
            padding: 0.5rem 7rem;
            border: none;
            border-radius: 5px;
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
        .mylabel{
            text-transform: uppercase; 
            display: contents;
        }
        table,tr,th,td
        {
            place-items: center;
            border : 2px;
            border-collapse:collapse;
            padding: 0.3rem;
        }
        /* tr:nth-child(even) {
            background-color: gainsboro;
        } */
        .textbox{
            border-radius: -5px;
            width: 100%;
            padding: 0.4rem;
        }
        
    </style> 
</head>
<body>
 
<?php 
      include_once("headers.php");
?>

<div class='courses shadow'>
<?php

include_once("dbcsemanager.php");
// $id = $_GET['id']; // get id through query string
$email_id = $_SESSION["user"];
$query = "SELECT * from csefaculty where email_id ='$email_id'";
$query_run= mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($query_run); // FD

// $email_id = $data['email_id'];
// $google_scholar = $data['google_scholar'];
// $dblp_link = $data['dblp_link'];
// $personal_link = $data['personal_link'];

if(isset($_POST['update'])) // when click on Update profile
{
    $full_name =  $_POST['full_name'];
    $designation =  $_POST['designation'];
    // $last_name = $_POST['last_name'];
    $email_id = $_POST['email_id'];
    $google_scholar =  $_POST['google_scholar'];
    $dblp_link = $_POST['dblp_link'];
    $personal_link = $_POST['personal_link'];

    $filename = $_FILES["image_file"]["name"];
    $tempname = $_FILES["image_file"]["tmp_name"];    
    $folder = "../img_file/".$filename;
	
    $edit = mysqli_query($conn,"update csefaculty set full_name='$full_name',designation='$designation' , google_scholar='$google_scholar',
    dblp_link='$dblp_link', personal_link= '$personal_link', image_file = '$filename' where email_id = '$email_id'");
	
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

<h1 class='course_heading'><i class="fas fa-user-edit"></i> Update Profile</h1>
<br>
<center>
<form method="POST" enctype="multipart/form-data">
  
<table border="1" style="width:100%">
    <tbody>
        <tr>
            <th><label class="mylabel" for="fullName">Faculty Full Name: </label></th>
            <th><input class="textbox" type="text" name="full_name" id="full_name" value="<?php echo $data['full_name'] ?>" placeholder="Enter Full Name" Required></th>
        </tr>

         <tr>
            <th><label class="mylabel" for="Designation">Designation: </label></th>
            <th><input class="textbox" type="text" name="designation" id="designation" value="<?php echo $data['designation'] ?>" placeholder="Enter Designation" Required></th>
        </tr>

         <tr>
            <th><label class="form-label" for="Email address">Email Address:</label></th>
            <th><input class="textbox" type="text" name="email_id" id="email_id" value="<?php echo $data['email_id'] ?>" readonly="readonly" placeholder="Enter Email" Required></th>
        </tr>

        <tr>
            <th><label class="form-label" for="google_scholar">Google Scholar Link:</label></th>
            <th><input class="textbox" type="text" name="google_scholar" id="google_scholar" value="<?php echo $data['google_scholar'] ?>" placeholder="Enter google scholar link"></th>
        </tr>

        <tr>
            <th><label class="form-label" for="dblp_link">DBLP Link:</label></th>
            <th><input class="textbox" type="text" name="dblp_link" id="dblp_link" value="<?php echo $data['dblp_link'] ?>" placeholder="Enter DBLP Link" ></th>
        </tr>

        <tr>
            <th><label class="form-label" for="personal_link">Personal Link (if any):</label></th>
            <th><input class="textbox" type="text" name="personal_link" id="personal_link" value="<?php echo $data['personal_link'] ?>" placeholder="Enter Personal Link" ></th>
        </tr>

        <tr>
            <th><label class="form-label" for="image_file">Image_file</label></th>
            <th><input class="textbox" type="file" name="image_file" id="image_file" value="<?php echo $data['image_file'] ?>" placeholder=" " required></th>
        </tr>

    </tbody>
</table>

<br>
<button type="submit" name="update" value="update">Update Profile</button>


<!--

<div class="form">
    <label class="form-label" for="personal_link">Personal Link (if any):</label>
    <input class="textbox" type="text" name="personal_link" id="personal_link" value="<?php echo $data['personal_link'] ?>" placeholder="Enter Personal Link" >
</div>
<br>
                     
<br>
<a href = 'updateuser' style="text-decoration: none; color: black; "><button type="button" value=" ">Update My Profile</button></a> -->

</form>
</center>
</div>

<?php 
    include_once("footers.php");
?>
</body>


</html>