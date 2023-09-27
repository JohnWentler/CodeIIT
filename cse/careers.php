<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="im/IITGN.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style(Careers).css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
    
    <title>IITGN CSE | Careers</title>
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- =======================S-HEADER================== -->
<?php include_once "Header.php" ?>
<!-- =======================E-HEADER================= -->
    <!-- ------------------------------------------------Careers----------------------------------- -->

<div class="Careers">
    <h2 style="text-align: center;">Careers</h2>
</div>

<div id="head3">
    <div class="container">
        <div class="card ">
            <div class="card-body">
                <br><h4 class="card-title">Faculty Position</h4><br>
                <p class="card-text" style="text-align: justify;">
                    IIT Gandhinagar invites applications for faculty positions at Assistant Professor, Associate Professor, and Professor levels in all areas of Computer Science and Engineering. Candidates with expertise in Operating Systems, Distributed Systems, Computer Networks, Databases and similar, allied fields are especially encouraged to apply. 
                    The candidate must have an excellent academic record and a demonstrated potential for excellence in research. Successful candidates will be expected to teach at undergraduate and post-graduate levels, conduct independent research in their field of expertise, and contribute to administrative activities. 
                    As a rapidly growing institute, IITGN welcomes driven and energetic candidates who can contribute to institute-building activities.
                    
                    <br>
                    <br>
                    Please refer to the <a href="https://iitgn.ac.in/careers/faculty" style="text-decoration: none;">rolling advertisement on the institute website</a> for details on the application process.
                </p>
                
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <br><h4 class="card-title">Staff Position</h4><br>
                <p class="card-text" style="text-align: justify;">

                    For Non-Teaching Staff: &nbsp; <button class='button'><a href="https://iitgn.ac.in/careers/non-academic-staff" style="text-decoration: none;">Click Here</a></button>
                    <br>
                    <br>    
                    For Projects Positions Staff: &nbsp; <button class='button'><a href="https://iitgn.ac.in/careers/staff" style="text-decoration: none;">Click Here</a></button>

                     
                </p>
                
            </div>
        </div>
    </div>
</div>

<!-- ============================S-FOOTER================= -->
<?php include_once "Footer.php" ?>
<!-- ============================E-FOOTER================= -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
    </script>
</body>
</html>