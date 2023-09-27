
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
    
    <link rel="stylesheet" href="css/style(Staff).css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
     
    <link rel="icon" href="IITGN.png" type="image/png">
    <title>IITGN CSE | Staff</title>
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
    
</head>
<body>
<!-- =======================S-HEADER================== -->
<?php include_once "Header.php" ?>
<!-- =======================E-HEADER================= -->
<!-- ---------------------------------------------------Staff-------------------------------- -->
    <div class="staff">
        <h2 style="text-align: center;">Staff</h2>
    </div>

    <div id="head">
        <div class="container" style="width: 20rem;">
            <!-- <h2 class="py-3 text-center">Maharshi</h2>  -->
        <div class="row py-5">
            <!-- row -->

            <?php

                include_once("cse_manager/dbcsemanager.php");
                $query = "SELECT * from `staff_details` order by staff_name asc";
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
                                <img src="staff_image_file/<?php echo $row['staff_image'] ?>" class="img-fluid rounded-bottom" alt="">
                                <div class="card-body">
                                    <!-- <h5 class="card-title">
                                        <a href="<?php echo $row['personal_link']; ?>"> <?php echo $row["staff_Name"]; ?> </a><br>
                                    </h5> -->
                                    <h5 class="card-title">
                                        <?php echo " <a href='staffbio?id=".$row['email_id']."';> ".$row["staff_Name"]."</a> ";
                                        
                                        ?>
                                    </h5>
                                    <p>
                                        <a href="mailto:<?php echo $row["email_id"];?>" style="color:black"><?php echo $row["email_id"]; ?></a><br>
                                    </p>
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
                //     <div class="card rounded-bottom shadow-lg rounded">
                //         <img src="Profile.png" class="img-fluid rounded-bottom" alt="">
                //         <div class="card-body">
                //             <h3 class="card-title"><a href="https://ravirajsukhadiya.github.io/">Raviraj <br> Sukhadiya</a></h3>
                            
                //         </div>
                //     </div>
                // </div>
            
            ?>
        </div>
    </div>
    </div>
    
<!-- <h1>MAHARSHI PANCHAL</h1> -->
   <!-- ============================S-FOOTER================= -->
<?php include_once "Footer.php" ?>
<!-- ============================E-FOOTER================= -->
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    
</body>
</html>
<!-----------------------------------------------------------------------------End-People-Faculty-------------------------------------------------------------------------------------------- -->

