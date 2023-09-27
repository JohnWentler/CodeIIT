<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="IITGN.png" type="image/ico">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

  <link rel="stylesheet" href="style(header).css">
  <link rel="stylesheet" href="style(footer).css">
  <link rel="stylesheet" href="style(adminhome).css">
  <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>

  <title>CSE Master</title>
  <!-- ============css================== -->

</head>

<body>

<?php 
  include_once("Headers.php");
?>

<div id="home">
  <div class="container">
    <div class="card-1 one">
      <div class="card-body">
        <div class="row">

        <!-- -------------------------------------------------FACULTY------------------------------------------------------------ -->
        <?php 
          if($_SESSION['user'] == 'cse@iitgn.ac.in'){
            ?>

        <div class="col-sm-4 mb-3 mb-sm-0 text-center">
          <div class="card">
            <div class="card-body">
              <h3><span class="badge"><i class="fa-solid fa-user"></i>FACULTY</span></h3>
              <a href="faculty_input" class="btn btn-primary">ADD</a>
              <a href="update_faculty" class="btn btn-primary">VIEW</a>
            </div>
          </div>
        </div>

        <?php 
          }
          else{
        ?>
        <center>
          <div class="col-sm-4 mb-3 mb-sm-0 text-center">
            <div class="card">
              <div class="card-body">
                <center> <h3><span class="badge"><i class="fa-solid fa-user"></i> <center> FACULTY</center></span></h3></center>
                <a href="faculty_input" class="btn btn-primary">ADD</a>
                <a href="update_faculty" class="btn btn-primary">VIEW</a>
              </div>
            </div>
          </div>
        </center>
        
        <?php
          }
        ?>
        <!-- --------------------------------------------------End-FACULTY----------------------------------------------------------- -->
        <!-- --------------------------------------------------START-STUDENT----------------------------------------------------------- -->

        <?php 
          if($_SESSION['user'] == 'cse@iitgn.ac.in'){
            ?>
            <div class="col-sm-4 mb-3 mb-sm-0 text-center">
              <div class="card">
                <div class="card-body">
                  <h3><span class="badge"><i class="fa-solid fa-graduation-cap"></i>&nbsp;&nbsp;STUDENT</span></h3>
                  <a href="student_input" class="btn btn-primary">ADD</a>
                  <a href="update_student" class="btn btn-primary">VIEW</a>
                </div>
              </div>
            </div>
            <?php
          }
          // else{
            ?>
            <!-- <center>
            <div class="col-sm-4 mb-3 mb-sm-0 text-center" >
              <div class="card">
                <div class="card-body">
                  <center><h3><span class="badge"><i class="fa-solid fa-graduation-cap"></i>&nbsp;&nbsp;STUDENT</span></h3></center>
                  <a href="student_input.php" class="btn btn-primary">ADD</a>
                  <a href="update_student.php" class="btn btn-primary">VIEW</a>
                </div>
              </div>
            </div>

            </center> -->
          <?php 
          // }
          ?>
        <!-- --------------------------------------------------End-STUDENT----------------------------------------------------------- -->

          <!-- ---------------------------------------------STAFF------------------------------------------------- -->
          <?php 
          if($_SESSION['user'] == 'cse@iitgn.ac.in'){
            ?>
          <div class="col-sm-4 mb-3 mb-sm-0 text-center">
            <div class="card">
              <div class="card-body">
                <h3><span class="badge"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;STAFF</span></h3>
                <a href="staff_input" class="btn btn-primary">ADD</a>
                <a href="update_staff" class="btn btn-primary">VIEW</a>
              </div>
            </div>
          </div>
          <?php
          }
          // else{

          // }
          ?>
          <!-- ---------------------------------------------End-STAFF------------------------------------------------- -->
          
        </div>  
  
        <div class="row">

          <div class="col-sm-4 mb-3 mb-sm-0 text-center">
            <div class="card">
              <div class="card-body">
                <h3><span class="badge"><i class="fa-brands fa-researchgate"></i>&nbsp;RESEARCH</span></h3>
                <a href="research_input" class="btn btn-primary">ADD</a>
                <a href="update_research" class="btn btn-primary">VIEW</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mb-3 mb-sm-0 text-center">
            <div class="card">
              <div class="card-body">
                <h3><span class="badge"><i class="fa-sharp fa-solid fa-book"></i>&nbsp;&nbsp;COURSE</span></h3>
                <a href="courses" class="btn btn-primary">ADD</a>
                <a href="update" class="btn btn-primary">VIEW</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 mb-3 mb-sm-0 text-center">
            <div class="card">
              <div class="card-body">
                <h3><span class="badge"><i class="fa-solid fa-calendar"></i> &nbsp;&nbsp;EVENT</span></h3>
                <a href="event_input" class="btn btn-primary">ADD</a>
                <a href="update_events" class="btn btn-primary">VIEW</a>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </div>
  </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>


<?php 
  include_once("Footers.php");
?>
    
</body>
</html>


