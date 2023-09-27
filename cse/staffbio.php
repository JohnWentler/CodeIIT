<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta name='viewport' content='initial-scale = 1.0,maximum-scale = 1.0' />
	<link rel='icon' href='im/IITGN.png' type='image/png'>
	
	<link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap' rel='stylesheet'>
	
	<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet'>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' rel='stylesheet'>
	
	<link rel='stylesheet' href='css/style(facultybio).css?v=<?php echo time(); ?>'>
	<link rel='stylesheet' href='css/style(header).css?v=<?php echo time(); ?>'>
	<link rel='stylesheet' href='css/style(footer).css?v=<?php echo time(); ?>'>
	<title>IITGN CSE | home</title>
	<script src='https://kit.fontawesome.com/b4cef7db2c.js' crossorigin='anonymous'></script>

    <style>
        tr,th{
            margin:3rem 0 ;
        }
    </style>

</head>
<body class=' '>
	
<!-- =======================S-HEADER===================== -->
<?php include_once 'Header.php'?>
<!-- ============================E-HEADER================= -->

<?php
    include_once('cse_manager/dbcsemanager.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM `staff_details` where email_id = '$id' ";
    $query_run = mysqli_query($conn,$query);
    $check_query = mysqli_num_rows($query_run)>0;
    if($row= mysqli_fetch_assoc($query_run))
    {
    // echo $a = $row['faculty_name'];

    
        ?>
<div class="card-0 fb bg-dar">
    
    <div id='bio'>
        <div class='container bg-drk'>
            
            <div class='card mb-3 shadow-l'>
            <b> <h2 style="text-align: center;"><?php echo $row["staff_Name"]; ?></h2></b>
            <br>
            <!-- <h1 style="font-size: 1.8rem;">staff Profile</h1> -->
                <div class='row g-0'>
                    <div class='col-md-4 '>
                    
                        <!-- <img src='../img_file/anirban-dasgupta.jpg' class='img-fluid rounded-start' > -->
                        <img src='staff_image_file/<?php echo $row['staff_image']?>' class='img-fluid rounded-start shadow-lg' >
                        <!-- <?php echo $id?> -->
                    </div>
                    <div class='col-md-8 '>
                        <div class='card-body'>
                            <!-- <h5 class='card-title'>Card title</h5> -->
                            <table border="1" class="table shadow-l">
                                <tbody>
                                    <tr>
                                        <th>
                                        <label class='mylabel' for='staff_name'>Staff Name: </label>        
                                        </th>

                                        <th><label class='label text-muted' for='staff_name'><?php echo $row["staff_Name"]; ?></label></th>
                                    </tr>

                                    <!-- <tr>
                                        <th>
                                        <label class='mylabel' for='fullName'>Designation: </label>        
                                        </th>

                                        <th><label class='mylabel text-muted' for='fullName'><?php echo $row["designation"]; ?></label></th>
                                    </tr> -->

                                    <tr>
                                        <th>
                                        <label class='mylabel' for='fullName'>Email_id: </label>        
                                        </th>
                                        <th><label class='mylabel text-muted' for='fullName'> <a href="mailto:<?php echo $row["email_id"]; ?>" style="text-decoration: none; color: black;" class="text-muted"><?php echo $row["email_id"]; ?></a></label></th>
                                    </tr>

                                    <tr>
                                        <th>
                                        <label class='mylabel' for='fullName'>Personal Link:</label>        
                                        </th>
                                        <th><label class='mylabel text-muted' for='fullName'><a href="<?php echo $row["personal_link"]; ?>" style="text-decoration: none; color: #838ff;" class="text-mute">Click Here</a></label></th>
                                    </tr>

                                    <!-- <tr>
                                        <th>
                                        <label class='mylabel' for='fullName'>Google Scholar:</label>        
                                        </th>
                                        <th><label class='mylabel text-muted' for='fullName'><a href="<?php echo $row["google_scholar"];?>" style="text-decoration: none; color: black;" class="text-muted">Click Here</a></label></th>
                                    </tr>

                                    <tr>
                                        <th>
                                        <label class='mylabel' for='fullName'>dblp Link</label>        
                                        </th>
                                        <th><label class='mylabel text-muted' for='fullName'><a href="<?php echo $row["dblp_link"];?>" style="text-decoration: none; color: black;" class="text-muted">Click Here</a></label></th>
                                    </tr> -->

                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <?php  
    }
    else{
        echo "No Result Found!";
    }
    ?>


<!-- =================================About========================================= -->
<br>
<div id='desc'>
    <div class='container bg-dak' style='color: whte;'>
        <div class='card-header shadow-l'>about :-</div>

        <div class='card-body'>
            <?php echo $row["about"]; ?>
        </div>

        <br>

        <!-- <p class='text' style='text-align: justify;'></p> -->

        <br>
        <br>

        <!-- <div class='card-header shadow-l'>research :-</div>
        <br>
        <?php
            echo"<ul>";
            $query1 = "SELECT * from research where email_id ='$id' order by years desc";
            $result1= mysqli_query($conn,$query1);
            while($row = mysqli_fetch_assoc($result1)){
        ?>
            <li> <a href= "<?php echo $row['paper_link']; ?>" class="research-paper" style="text-decoration: none;"> <?php echo $row['title']; ?> </a><br/> </li>
        <?php 
        }
        ?>
        <?php
            echo"</ul>";
        ?> -->

        <!-- <ul style='text-align: justify;'>
            <li> <a href='https://content.iospress.com/articles/journal-of-computer-security/jcs211385' style='text-decoration: none;'>Permissive runtime information flow control in the presence of exceptions</li></a>
            <li> <a href='https://ieeexplore.ieee.org/document/9505224' style='text-decoration: none;'>Automating Audit with Policy Inference</li></a>
            <li> <a href='https://ieeexplore.ieee.org/document/9505218' style='text-decoration: none;'>Gradual Security Types and Gradual Guarantees</li></a>
            <li> <a href='https://dl.acm.org/doi/10.1145/3320269.3384759' style='text-decoration: none;'>Contextual and Granular Policy Enforcement in Database-backed Applications</li></a>
            <li> <a href='https://arxiv.org/abs/2003.12819' style='text-decoration: none;'>First-order Gradual Information Flow Types with Gradual Guarantees</li></a>
        </ul> -->

        <br>



    </div>
</div>
</div>


<!-- ========================================================= -->








<!-- ============================S-FOOTER================= -->
<?php include_once 'Footer.php' ?>
<!-- ============================E-FOOTER================= -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script> 
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js'></script> 
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js'></script>



</body>
</html>