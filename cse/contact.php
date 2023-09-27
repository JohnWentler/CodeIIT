<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="im/IITGN.png" type="image/png">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;900&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

    
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style(Contact).css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
    <title>IITGN CSE | Conatct</title>
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- =======================S-HEADER================== -->
 <?php include_once "Header.php" ?>
 <!-- =======================E-HEADER================= -->
    <!-- ------------------------------------------------Contact----------------------------------- -->

    <div id="about">
        <div class="container">
            <div class="row">
                
                
                <div class="about-col-2 b-primary vertical">
                    <h2 class="Subtitle">Contact Us</h2>
                    <p class="desc"><u><b>Department of Computer Science & Engineering</b> <br>Indian Institute of Technology Ghandhinagar</u></p>
                       <div class="tab-titles">
                           <p class="tab-links active-link" onclick="opentab('email')">EMAILS</p>
                           <p class="tab-links" onclick="opentab('address')">ADDRESS</p>
                        <p class="tab-links" onclick="opentab('social')">SOCIAL</p>
                       </div>

                       <div class="tab-contents active-tab" id="email">
                            <ul>
                                <li><span>CSE_IITGN</span><br><a href="mailto:cse@iitgn.ac.in" style="color:black; text-decoration: none;">cse@iitgn.ac.in</a></li>
                                <!-- <li><span> Name </span><br>abcd@xyz.com</li>
                                <li><span> Name </span><br>abcd@xyz.com</li> -->
                            </ul>
                       </div>

                       <div class="tab-contents" id="address">
                        <ul>
                            <li>
                                <span style="color:black;">Indian Institute of Technology Gandhinagar Palaj,<br> Gandhinagar - 382055, Gujarat</span>
                            </li>
                            <!-- <li><span>Name </span><br>0123456789</li>
                            <li><span>Name</span><br>0123456789</li> -->
                        </ul>
                       </div>

                       <div class="tab-contents" id="social">
                        <ul>
                            <li><span>youtube</span><br> <a href="https://www.youtube.com/channel/UCPYUnvUV3CiMmkhfYME48QQ"><i class="fa-brands fa-youtube"></i></a></li>
                            <li><span>twitter</span><br><a href="https://twitter.com/cse_iitgn"><i class="fa-brands fa-twitter "></i></a></li>
                            <li><span>linkedin</span><br><a href="https://www.linkedin.com/school/indian-institute-of-technology-gandhinagar-iitgn-/"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><span>iitgn-research</span><br><a href="https://iitgn.ac.in/research"><i class="fa-solid fa-book "></i></a></li>
                            <!-- <li><span>facebook</span><br><a href="https://www.facebook.com/iitgn.official/posts/the-computer-science-and-engineering-discipline-of-iit-gandhinagar-organised-the/2937064049694247/"><i class="fa-solid fa-book fa-bounce"></i></a></li> -->
                        </ul>
                       </div>
                </div>
                <div class="about-col-1 b-danger">
                    
                    <p>
                        The Department of Computer Science and Engineering (CSE) at IIT Gandhinagar offers a B.Tech. degree in Computer Science and Engineering. 
                        The curriculum of the B.Tech. program in CSE at IITGN is designed to provide students with a broad and in-depth understanding of computer science and engineering. 
                        Students also have the opportunity to take elective courses in areas such as computer graphics, web development, and security.
                        In addition to the core curriculum, students in the B.Tech. program at IITGN are also required to participate in a variety of extracurricular activities, such as research, internships, and hackathons. 
                        These activities provide students with the opportunity to gain hands-on experience in the field and to network with professionals in the industry.
                    </p> 

                    <p>
                        <b>
                        Here are some of the research areas in CSE at IITGN:
                        </b>

                        <ul>
                            <li>Artificial Intelligence and Machine Learning</li>
                            <li>Computer Vision</li>
                            <li>Natural Language Processing</li>
                            <li>Data Science</li>
                            <li>Robotics</li>
                            <li>Cyber Security</li>
                            <li>Cloud Computing</li>
                            <li>Networking</li>
                        </ul>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");
    
        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");   
        }
    </script>

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