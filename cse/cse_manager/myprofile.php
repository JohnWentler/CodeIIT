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
    <link rel="stylesheet" href="style(myprofile).css">
    <!-- <link rel="stylesheet" href="style(l).css"> -->

    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
     
    <title>User Profile</title>

    <style>
        
        

    </style>


</head>
<body>
 
<?php 
    include_once("headers.php");
?>

<div class='courses shadow'>
<?php


include_once("dbcsemanager.php");
// $email_id = $_GET['email_id']; // get id through query string

$email_id = $_SESSION["user"];

$query = "SELECT * from csefaculty where email_id ='$email_id'";

// $query = "SELECT * from login where id ='$email'";
$query_run= mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($query_run); // fetch data 

//print_r($data);

// $username = ($data['first_name'] . " " . $data['middle_name'] . " " .$data['last_name']);
// $email_id = $data['email_id'];
// $google_scholar = $data['google_scholar'];
// $dblp_link = $data['dblp_link'];
// $personal_link = $data['personal_link'];

// echo $username;

if(isset($_POST['update'])) // when click on Update button
{
    $user = $_POST['user'];
    $designation = $_POST['designation'];
    $email_id = $_POST['email_id'];
    $google_scholar =  $_POST['google_scholar'];
    $dblp_link = $_POST['dblp_link'];
    $personal_link = $_POST['personal_link'];
    
    $edit = mysqli_query($conn,"update csefaculty set user='$user', designation = '$designation', google_scholar='$google_scholar', dblp_link='$dblp_link',personal_link= '$personal_link' where email_id = '$email_id'");
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:update_faculty"); // redirects to all records page
        exit;
    }
    else
    {
        // echo mysqli_error();
    }    	
}
?>


<h1 class='course_heading'><i class="fa-solid fa-user"></i> MY PROFILE</h1>
<br>
<center>
<form method="POST">
<table border=1 style="width:100%">
    <tbody>
        <tr>
            <th>
                <label class="my-label" for=" "> Faculty Name: </label>
            </th>
            <th> <?php echo $data['full_name'] ?>   </th>
        </tr>

        <tr>
            <th>
                <label class="my-label" for="designation">designation </label>
            </th>
            <th><?php echo $data['designation'] ?></th>
        </tr>

        <tr>
            <th>
                <label class="my-label" for="Email address">Email id: </label>
            </th>
            <th><?php echo $data['email_id'] ?></th>
        </tr>

        <tr>
            <th>
                <label class="my-label" for="google_scholar">Google Scholar Link:</label>
            </th>
            <th><?php echo $data['google_scholar'] ?></th>
        </tr>

        <tr>
            <th>
                <label class="my-label" for="dblp_link">Dblp link: </label>
            </th>
            <th><?php echo $data['dblp_link'] ?></th>
        </tr>

        <tr>
            <th>
                <label class="my-label" for="personal_link"> Personal link: </label>
            </th>
            <th><?php echo $data['personal_link'] ?></th>
        </tr>

        <!-- <tr>
            <th>
                <label class="my-label" for="image_file"> image: </label>
            </th>
            <th><?php echo $data['image_file'] ?></th>
        </tr> -->

        
    </tbody>
</table>



<!-- <div class="form">
    <label class="my-label" for="personal_link">Personal Link:</label>
    <input class="textbox" type="text" name="personal_link" id="personal_link" value="<?php echo $personal_link; ?>" placeholder=" " readonly="readonly">
</div>
<br>  -->


                        
<br>

<a href = 'updateprofile' style="text-decoration: none; color: black; "><button type="button" value=" ">Update My Profile</button></a>

</form>
</center>
</div>

<?php 
    include_once("footers.php");
?>

</body>
</html>