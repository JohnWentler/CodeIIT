<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IITGN.png" type="image/png">

    <!--css stylesheets-->
    <!-- <link rel="stylesheet" href="../css\bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../styles.css" />
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
    <link rel="stylesheet" href="style(input).css">
    <!-- <link rel="stylesheet" href="style(l).css"> -->

    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
    
    <title>Course Edit Form</title>
    
<style>
    body{
        background-color: #f9f9ff;
    }
    .course_heading h1{
        font-weight: 900;
        margin-bottom: 2rem;
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

</style>

</head>
<body>

<?php 
    include_once("headers.php");
?>

<div class='courses'>

<?php

include_once("dbcsemanager.php");

$course_code = $_GET['id']; // get id through query string
$query = "SELECT * from courses where course_code ='$course_code'";
$query_run= mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($query_run); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $course_code =  $_POST['course_code'];
    $course_name =  $_POST['course_name'];
    $course_description =  $_POST['course_description'];
    $Credits = $_POST['Credits'];
    $L = $_POST['L'];
    $T =  $_POST['T'];
    $P = $_POST['P'];
    $preferred_sem_btech = $_POST['preferred_sem_btech'];
    $preferred_sem_mtech = $_POST['preferred_sem_mtech'];
    $offered_in = $_REQUEST['offered_in'];
    $type = $_POST['type'];
    $area = $_POST['area'];
    $course_link = $_POST['course_link'];
    
        
    $edit = mysqli_query($conn,"update courses set course_code= '$course_code', course_name='$course_name',course_description = '$course_description',
    Credits='$Credits',L='$L',T='$T',P='$P', preferred_sem_btech= '$preferred_sem_btech',preferred_sem_mtech= '$preferred_sem_mtech',offered_in='$offered_in',type= '$type', area='$area', course_link='$course_link' where course_code = '$course_code'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:update"); // redirects to all records page
        exit;
    }
    else
    {
         echo mysqli_error();
    }    	
}
?>


<center>
<div class="data">
<div class='course_heading'>
    <h1><i class="fa-sharp fa-solid fa-book"></i> Update Course Data</h1>
</div>
<form method="POST">

    
        
  <p> <label class="form-label" for="CourseCode">Course Code:</label> <input class="textbox" type="text" name="course_code" id="course_code" value="<?php echo $data['course_code'] ?>" placeholder="Enter Course Code" Required> </p>
  <p> <label class="form-label" for="CourseName">Course Name:</label> <input class="textbox" type="text" name="course_name" id="course_name" value="<?php echo $data['course_name'] ?>" placeholder="Enter Course Name" Required> </p>
  <p> <label class="form-label" for="CourseDescription">Course Course Description:</label> <input class="textbox" type="text" name="course_description" id="course_description" value="<?php echo $data['course_description'] ?>" placeholder="Enter Course description" Required> </p>
  <p> <label class="form-label" for="Credits">Credits:</label> <input class="textbox" type="text" name="Credits" id="Credits" value="<?php echo $data['Credits'] ?>" placeholder="Enter Credits" Required> </p>
  <p> <label class="form-label" for="L">L:</label> <input class="textbox" type="text" name="L" id="L" value="<?php echo $data['L'] ?>" placeholder="Enter L"> </p>
  <p> <label class="form-label" for="T">T:</label> <input class="textbox" type="text" name="T" id="T" value="<?php echo $data['T'] ?>" placeholder="Enter T"> </p>
  <p> <label class="form-label" for="P">P:</label> <input class="textbox" type="text" name="P" id="P" value="<?php echo $data['P'] ?>" placeholder="Enter P"> </p>
  <p> <label class="form-label" for="preferred_sem_btech">Preferred Semester (BTech):</label> <input class="textbox" type="text" name="preferred_sem_btech" id="preferred_sem_btech" value="<?php echo $data['preferred_sem_btech'] ?>" placeholder="Enter Preferred Semester" Required> </p>
  <p> <label class="form-label" for="preferred_sem_mtech">Preferred Semester (MTech):</label> <input class="textbox" type="text" name="preferred_sem_mtech" id="preferred_sem_mtech" value="<?php echo $data['preferred_sem_mtech'] ?>" placeholder="Enter Preferred Semester" Required> </p>
  <p> <label class="form-label" for="offered_in">Offered In (Even/Odd Semester):</label> <input class="textbox" type="text" name="offered_in" id="offered_in" value="<?php echo $data['offered_in'] ?>" placeholder="Enter Odd/Even" Required> </p>
  <p> <label class="form-label" for="type">Type:</label> <input class="textbox" type="text" name="type" id="type" value="<?php echo $data['type'] ?>" placeholder="Enter Type" > </p>
  <p> <label class="form-label" for="area">Area:</label> <input class="textbox" type="text" name="area" id="area" value="<?php echo $data['area'] ?>" placeholder="Enter Area" > </p>
  <p> <label class="form-label" for="course_link">Course Link:</label> <input class="textbox" type="text" name="course_link" id="course_link" value="<?php echo $data['course_link'] ?>" placeholder="Enter Course Link " > </p>
  

  <button type="submit" name="update" value="Update">Update</button>
  
</div>
</form>
</center>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<?php 
    include_once("footers.php");
?>
</body>
</html>