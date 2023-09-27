<!DOCTYPE html>
<html lang="en">
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
   
    <title>courses database</title>
    <style>
      .data{
        max-width: 700px;
      }
      form{
        max-width: 1000px;
      }
    </style>
</head>
  
<body>

<?php 
  include_once("Headers.php");
?>

<center>
<div class="data courses shadow-lg">
<h1><i class="fa-sharp fa-solid fa-book"></i> Courses Database</h1>
    <!-- <h1><i class="fa-sharp fa-solid fa-book"></i> New Add Courses Database</h1><hr>  <br> -->

    <table>
      <form action="courses" method="post"  enctype="multipart/form-data">
       
      <tr>
        <td><label class="form-label" for="CourseCode"> Course Code:</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Course Name" name="course_code" id="course_code" Required></td>
      </tr>

      <tr>
        <td><label class="form-label" for="CourseName">Course Name:</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Course Name" name="course_name" id="course_name" Required></td>
      </tr>

      <tr>
        <td><label class="form-label" for="CourseDescription">Course Description:</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Course Name" name="course_description" id="course_description" Required></td>
      </tr>

      <tr>
        <td><label class="form-label" for="Credits">Credits:</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Credits" name="Credits" id="Credits" Required></td>
      </tr>

      <tr>
        <td><label class="form-label" for="L">L:</label></td>
        <td><input class="textbox" type="text" placeholder="L: " name="L" id="L"></td>
      </tr>

      <tr>
        <td><label class="form-label" for="T">T:</label></td>
        <td><input class="textbox" type="text" placeholder="T: " name="T" id="T"></td>
      </tr>

      <tr>
        <td><label class="form-label" for="P">P:</label></td>
        <td><input class="textbox" type="text" placeholder="P: " name="P" id="P"></td>
      </tr>

      <tr>
        <td><label class="form-label" for="preferred_sem_btech"> Preferred Semester (BTech):</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Preferred Sem BTech" name="preferred_sem_btech" id="preferred_sem_btech" Required></td>
      </tr>

      <tr>
        <td><label class="form-label" for="preferred_sem_mtech">Preferred Semester (MTech):</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Preferred Sem MTech" name="preferred_sem_mtech" id="preferred_sem_mtech" Required></td>
      </tr>

      <tr>
        <td><label class="form-label" for="offered_in">Offered In (Even/Odd Semester):</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Course Even or Odd" name="offered_in" id="offered_in"></td>

      </tr>

      <tr>
        <td><label class="form-label" for="type">Type:</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Type" name="type" id="type"></td>
      </tr>

      <tr>
        <td><label class="form-label" for="area">area:</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Area" name="area" id="area"></td>
      </tr>

      <tr>
        <td><label class="form-label" for="course_link">Course-Link:</label></td>
        <td><input class="textbox" type="text" placeholder="Enter Course Link" name="course_link" id="course_link"></td>
      </tr>
        
      
    </table>

    

    <div style="margin:10px">
      <button type="submit" name="upload">UPLOAD</button>
    </div>

  </form>
</div>

    <?php
    // servername => localhost
    // username => root
    // password => empty
    // database name => cse
    if (isset($_POST['upload'])) {
         
      include_once("dbcsemanager.php");
    // Taking all 5 values from the form data(input)
    $course_code =  $_REQUEST['course_code'];
    $course_name =  $_REQUEST['course_name'];
    $course_description =  $_REQUEST['course_description'];
    $Credits = $_REQUEST['Credits'];
    $L = $_REQUEST['L'];
    $T =  $_REQUEST['T'];
    $P = $_REQUEST['P'];
    $preferred_sem_btech = $_REQUEST['preferred_sem_btech'];
    $preferred_sem_mtech = $_REQUEST['preferred_sem_mtech'];
    $offered_in = $_REQUEST['offered_in'];
    $type = $_REQUEST['type'];
    $area = $_REQUEST['area'];
    $course_link = $_REQUEST['course_link'];

    
      
    // Performing insert query execution
    // here our table name is csefaculty
   echo $sql = "INSERT INTO courses  VALUES ('$course_code', '$course_name', '$course_description',
        '$Credits','$L','$T','$P', '$preferred_sem_btech', '$preferred_sem_mtech','$offered_in','$type', '$area', '$course_link') order by course_code asc";
      
      if($course_code != ''){
        echo $course_code;
        if(mysqli_query($conn, $sql)){
             echo "
           <script type= 'text/javascript'>
             alert('New record created successfully');
           </script>";

           //echo "Check Success name";
        }
        else{
            echo "<script type= 'text/javascript'>
             ERROR: Hush! Sorry $sql.  
                 . mysqli_error($conn)
             </script>";
            //echo "Failed check Course name";
        }
    } 
    // Close connection
    mysqli_close($conn);
}
  ?>
</center>
 
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script> -->

<?php 
      include_once("Footers.php");
?>
</body>
</html>