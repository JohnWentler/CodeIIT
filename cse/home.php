<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
	<link rel="icon" href="im/IITGN.png" type="image/png">
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="css/style(home).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
	<title>IITGN CSE | home</title>
	<script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>

</head>
<body>
	
<!-- =======================S-HEADER===================== -->
<?php include_once "Header.php"?>
<!-- ============================E-HEADER================= -->

<!-- ----------------------------------------------------Started-image (Carousel)-------------------------------------- -->
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button>
			<button aria-label="Slide 2" class="active1" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> 
			<button aria-label="Slide 3" class="active2" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
			<button aria-label="Slide 4" class="active3" data-bs-slide-to="3" data-bs-target="#carouselExampleIndicators" type="button"></button>
			<button aria-label="Slide 5" class="active4" data-bs-slide-to="4" data-bs-target="#carouselExampleIndicators" type="button"></button>
			
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt=" " class="d-block w-100" src="im/IITGNINDOML.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 0.7s">Computer Science</h5>
					<p class="animated fadeInUp " style="animation-delay: 1s">We are training the next generation of computer scientists who will use their skills to make a positive impact on the world.
						we are shaping the future of computing.
						The future of computing is here. </p>
					<!-- <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p> -->
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="im/IITGNC9.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 0.7s"> Artificial Intelligence & DATA SCIENCE </h5>
					<p class="animated fadeInUp" style="animation-delay: 1s">The lab is equipped with the latest hardware and software,and it provides a collaborative environment.</p>
					<!-- <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p> -->
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="im/IITGNC10.png">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 0.7s">Academics</h5>
					<p class="animated fadeInUp" style="animation-delay: 1s"> IITGN offers a wide range of undergraduate, postgraduate, and doctoral programs in engineering, science, humanities, and management.</p>
					<!-- <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p> -->
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="im/IITGNC6.jpeg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 0.7s">Research</h5>
					<p class="animated fadeInUp" style="animation-delay: 1s">
						the research areas that the department is active in,faculty members who are involved in research,research projects that are currently underway,publications that have been produced by the department.
					</p>
					<!-- <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p> -->
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="im/I5.jpg">
				<div class="carousel-caption">
					<h5 class="animated fadeInDown" style="animation-delay: 0.7s">Programming</h5>
					<p class="animated fadeInUp" style="animation-delay: 1s">students to develop critical thinking and problem-solving skills,students to create innovative solutions to real-world problems,valuable skill that can be used in a variety of fields.</p>
					<!-- <p class="animated fadeInUp" style="animation-delay: 3s"><a href="#">Learn More</a></p> -->
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button">
			<span aria-hidden="true" class="carousel-control-prev-icon"></span>
			<span class="visually-hidden">Previous</span>
		</button> 
		<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button">
			<span aria-hidden="true" class="carousel-control-next-icon"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
<!-- -----------------------------------------------------------Ended-Carousel------------------------------------------ -->
<!-- ------------------------------------------------------------Para--------------------------------------------------- -->
<div id="para">
        <div class="container">
            <div class="row">

                <div id="slideshow" class="shadow-lg">
                    <div class="slide-wrapper">
						<div class="slide">
                            <!-- <h1 class="slide-number">
                                Slideshow with HTML and CSS only
                            </h1> -->
                            <img src="im/IITGNINDOML1.png" alt="">
                            
                        </div>
                        <div class="slide">
                            <!-- <h1 class="slide-number">
                                GeeksforGeeks
                            </h1> -->
                            <img src="im/IITGNC2.jpg" alt="">
                        </div>
                        <div class="slide">
                            <!-- <h1 class="slide-number">
                                A computer science portal
                            </h1> -->
                            <img src="im/IITGNC1.jpg" alt="">
                        </div>
                        <div class="slide">
                            <!-- <h1 class="slide-number">
                                This is an example of
                            </h1> -->
                            <img src="im/IITGNC0.jpg" alt="">
                        </div>
                        <div class="slide">
                            <!-- <h1 class="slide-number">
                                Slideshow with HTML and CSS only
                            </h1> -->
                            <img src="im/IITGNC7.jpg" alt="">
                        </div>
						<div class="slide">
                            <!-- <h1 class="slide-number">
                                Slideshow with HTML and CSS only
                            </h1> -->
                            <img src="im/INDOML2.png" alt="">
                        </div>
						
						
                    </div>
                </div>


                <div class="card shadow-lg">
                    <div class="card-body">
                      <h5 class="card-title"><b> <u> about us</u></b></h5>
                      <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
						<p class="card-text">
							The Indian Institute of Technology Gandhinagar (IITGN) is one of the leading centers of excellence in computer science & engineering education and research in India. 
							The CSE department was established in 2008 with a vision to create a world-class research and teaching environment in computer science.
							The department offers a four-year undergraduate program in computer science and engineering, a two-year master's program in computer science, and a Ph.D. program in computer science.
						</p>
                      <a href="https://news.iitgn.ac.in/" class="news shadow-lg" style="text-decoration: none;" target=" ">News</a>
                      <!-- <a href="#" class="card-link">Another link</a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
	<!-- ========================================================== -->

	
 

 
<!-- ------------------------------------------------------------Ended-Para--------------------------------------------------- -->

<!-- ============================S-FOOTER================= -->
<?php include_once "Footer.php" ?>
<!-- ============================E-FOOTER================= -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>



</body>
</html>