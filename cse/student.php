
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="im/IITGN.png" type="image/png">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style(student).css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
     
    <link rel="icon" href="IITGN.png" type="image/png">
    <title>IITGN CSE | Student</title>
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
    
</head>
<body>

<!-- =======================S-HEADER================== -->
<?php include_once "Header.php" ?>
<!-- =======================E-HEADER================= -->

 <!-- ---------------------------------------------------Profile-Student-------------------------------- -->
    

    <div id="head">
    <center>
        <div class="student" style="margin: 1rem;background: black; color: white; border-radius: 15px 15px; ">
            <h1 style="text-align: center;">PhD Student</h1>
        </div>
    </center>

        <div class="students">

            <div class="container bg-whte">
                <!-- <h2 class="py-3 text-center">Maharshi</h2>  -->
                <div class="row py-5">
                <!-- row -->
            
                <?php
                    include_once("cse_manager/dbcsemanager.php");
                    $query = "SELECT * from student_details order by student_name asc";
                    // $query = "SELECT * from student_details";
                    $query_run= mysqli_query($conn,$query);
                    $check_student = mysqli_num_rows($query_run)>0;
                    if($check_student)
                    {
                        while($row= mysqli_fetch_assoc($query_run))
                        {
                            ?>
                            <div class="col-md-4">
                                <!-- col -->
                                <div class="card rounded-bottom shadow-lg rounded ">
                                    <img src="student_image_file/<?php echo $row['student_image'] ?>"  class="img-fluid rounded-bottom" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php echo $row['personal_link']; ?>"> <?php echo $row["student_Name"]; ?> </a>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                            <?php 
                        }
                    }
                    else
                    {
                    echo "No student found";
                    }

                    
                    
                // <div class="col-md-4">
                //     <!-- col -->
                //     <div class="card rounded-bottom shadow-lg rounded ">
                //         <img src="Profile.png" class="img-fluid rounded-bottom" alt="">
                //         <div class="card-body">
                //             <h3 class="card-title"><a href="http://himanshubeniwal.tech/">Himanshu<br> Beniwal</a></h3>
                
                //         </div>
                //     </div>
                // </div>
                ?>        
            </div>
        </div>

        <center>
            <h1 class="alumni" style="margin: 1rem; background: black; color: white; border-radius: 15px  15px; " >Alumni Student</h1>
            <br>
        </center>
        
       
        <div class="alumni">
            <div class="container">
                <div class="row">   
                    <?php
                        include_once("cse_manager/dbcsemanager.php");
                        $query = "SELECT * from alumni";
                        $query_run= mysqli_query($conn,$query);
                        $check_student = mysqli_num_rows($query_run)>0;
                        if($check_student)
                        {
                            while($row= mysqli_fetch_assoc($query_run))
                            {
                                ?>
                                <div class="col-md-4">
                                    
                                    <div class="card rounded-bottom shadow-lg rounded shadow-lg">
                                        <img src="staff_image_file/<?php echo $row['student_image'] ?>"  class="img-fluid rounded-bottom" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href=" "> <?php echo $row["student_name"]; ?> </a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>

                                <?php 
                            }
                        }
                        else
                        {
                            echo "No student found";
                        }  
                    ?>
                </div>
            </div>
        </div>


        
    </div>
</div>
    
<!--check text <h1>MAHARSHI PANCHAL</h1> -->
<!-- ============================S-FOOTER================= -->
<?php include_once "Footer.php" ?>
<!-- ============================E-FOOTER================= -->
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    
</body>
</html>
<!-----------------------------------------------------------------------------End-People-Faculty-------------------------------------------------------------------------------------------- -->

