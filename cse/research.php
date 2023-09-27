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
    
    <link rel="stylesheet" href="css/style(Research).css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
    <title>IITGN CSE | Research</title>
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- =======================S-HEADER================== -->
<?php include_once "Header.php" ?>
<!-- =======================E-HEADER================= -->

<!-- -------------------Reseach-------------- -->

<div class="Research">
    <h2 style="text-align: center;">Research</h2><br>
</div>

<div id="head5">
    <div class="container">

        <?php
            include_once("cse_manager/dbcsemanager.php");
            $query = "SELECT faculty_name,email_id,about,years,paper_link,title from research group by email_id ";
            // $query = "SELECT full_name from csefaculty where email_id;
            $result= mysqli_query($conn,$query);

            $check_faculty = mysqli_num_rows($result)>0;
    
            if($check_faculty)
            {
                while($row = $result->fetch_assoc()) {
                    $a = $row['faculty_name'];
                ?>
                    <div class="card" style="padding: 1rem;">
                        <div class="card-body">
                            <br><h4 class="card-title"><?php echo $row['faculty_name']; ?></h4><br>
                            <p class="card-text" style="text-align: justify;">
                            <p style="text-align: justify;"> <?php echo $row['about']; ?> </p>
                                    
                                <br><h4 class="card-title">Recent Research Papers:</h4><br>
                   
                                <?php
                                    echo"<ul>";
                                    // $query1 = "SELECT * from research where faculty_name ='$a' order by years desc LIMIT 5";
                                    $query1 = "SELECT * from research where faculty_name ='$a' order by id desc";
                                    $result1= mysqli_query($conn,$query1);
                                    while($row = mysqli_fetch_assoc($result1)){
                                ?>
                                    <li> <a href= "<?php echo $row['paper_link']; ?>" class="research-paper" style="text-decoration: none;"> <?php echo $row['title']; ?> </a><br/> </li>
                                <?php 
                                }
                                ?>
                                <?php
                                    echo"</ul>";
                                ?>
                            
                            </p>
                        </div>
                    </div>
                <?php
            }
        }
    ?>

            

            


            

   <!-- <div class="card">
    //        <div class="card-body">
    //            <br><h4 class="card-title">Abhishek Bichhawat</h4><br>
    //            <p class="card-text" style="text-align: justify;">
    //                PersonalLink: <a href="http://people.iitgn.ac.in/~abhishek/" style="text-decoration: none;">http://people.iitgn.ac.in/~abhishek/</a><br>
    //                <br>
    //                Balagopal’s research interests are in the areas of computational complexity theory and algorithms. 
    //                His research is mainly about analyzing the power and limitations of natural models of computation which include models that capture a wide variety of algorithms for interesting computational problems and models that are inspired by real-world constraints.
    //                <h4 class="card-title">Recent Research Papers:</h4>
    //                <ul>
    //                    <li> <a href="https://content.iospress.com/articles/journal-of-computer-security/jcs211385" style="text-decoration: none;">Permissive runtime information flow control in the presence of exceptions</li></a>
    //                    <li> <a href="https://ieeexplore.ieee.org/document/9505224" style="text-decoration: none;">Automating Audit with Policy Inference</li></a>
    //                    <li> <a href="https://ieeexplore.ieee.org/document/9505218" style="text-decoration: none;">Gradual Security Types and Gradual Guarantees</li></a>
    //                    <li> <a href="https://dl.acm.org/doi/10.1145/3320269.3384759" style="text-decoration: none;">Contextual and Granular Policy Enforcement in Database-backed Applications</li></a>
    //                    <li> <a href="https://arxiv.org/abs/2003.12819" style="text-decoration: none;">First-order Gradual Information Flow Types with Gradual Guarantees</li></a>
    //                </ul>
    //            </p>
    //        </div>
    //    </div> -->

    </div>
</div>

<!-- ============================S-FOOTER================= -->
<?php include_once ("Footer.php") ?>
<!-- ============================E-FOOTER================= -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>


</body>
</html>