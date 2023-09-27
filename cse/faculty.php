<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IITGN.png" type="image/png">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style(Profile).css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
     
    <link rel="icon" href="im/IITGN.png" type="image/png">
    <title>IITGN CSE | Faculty</title>
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <!-- Name: MAHARSHI -->

<!-- =======================S-HEADER================== -->
 <?php include_once ("Header.php"); ?>
<!-- =======================E-HEADER================= -->

<!-- --------------------------------------------Faculty-------------------------------- -->
    <div class="faculty">
        <h2 style="text-align: center;">Faculty</h2>
    </div>

    <div id="head">
        <div class="container">
            <!-- <h2 class="py-3 text-center">Maharshi</h2>  -->
        <div class="row py-5">
            <!-- row -->
            <?php
            include_once("cse_manager/dbcsemanager.php");
            $query = "SELECT * FROM `csefaculty`  order by full_name asc;";
            $query_run = mysqli_query($conn,$query);
            $check_faculty = mysqli_num_rows($query_run)>0;
            if($check_faculty)
            {
                while($row= mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="col-md-4">
                        <!-- col -->
                        <div class="card rounded-bottom shadow-lg rounded ">
                            <img class="img-fluid rounded-bottom" src="img_file/<?php echo $row['image_file']?>"/>
                           
                            <div class="card-body">
                                <!-- <h4 class="card-title"><a href="<?php echo $row['personal_link']; ?>">  <?php echo $row["full_name"]; ?> </a></h4> -->
                                <h4 class="card-title">
                                    <?php echo "<a href='facultybio?id=" .$row['email_id']."'>" .$row["full_name"]." </a>"; ?>
                                </h4>
                                <p class="card-text">
                                    <!-- <a href="mailto:<?php echo $row["email_id"]; ?>" style="color:black"><?php echo $row["email_id"]; ?></a><br> -->
                                    <!-- <a href="<?php echo $row['google_scholar']; ?>" class="google-scholar">Google scholar</a><br/> -->
                                    <!-- <a href="<?php echo $row["dblp_link"]; ?>"  class="card-text">DBLP</a><br/> -->
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php

                }
            }
            else{
                echo "No faculty there";
            }
            ?>

            <!-- <div class="col-md-4">
                <div class="card rounded-bottom-top shadow-lg rounded">
                    <img src="Profile.png" class="img-fluid rounded-bottom" alt="">
                    <div class="card-body">
                        <h4 class="card-title"> <a href="http://yogeshmeena.com/">Yogesh Kumar Meena</a></h4>
                        <p class="card-text">
                            <a href="mailto:yk.meena@iitgn.ac.in" style="color:black">yk.meena-at-iitgn.ac.in</a><br>
                            <a href="https://scholar.google.it/citations?user=5xxepFkAAAAJ&hl=en">Google scholar</a> <br>
                            <a href="https://dblp.org/pid/66/10604.html">DBLP</a>
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    </div>
    
<!-- <h1>MAHARSHI PANCHAL</h1> -->
<!-- ============================S-FOOTER================= -->
<?php include_once ("Footer.php"); ?>
<!-- ============================E-FOOTER================= -->
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    
</body>
</html>
<!-----------------------------------------------------------------------------End-People-Faculty-------------------------------------------------------------------------------------------- -->

