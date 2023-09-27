<?php
include_once("checksession.php");
?>
<header style="font-weight: bold;">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">

            <div class="logo">
                <a class="navbar-brand" href="Event.php"><img src="IITGN.png"><h6 style="font-weight:bold">Computer Science <br> &nbsp;&nbsp;  & Engineering</h6></a> 
            </div>

            <button class="navbar-toggler collapsed" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="scroll-button">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="/cse/cse_manager/">Home</a>
                    </li>

                    <?php 
                        // if($_SESSION['user'] == 'cse@iitgn.ac.in'){
                    ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" class=" nav-link mx-3 text-dark fs-5" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Academics</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                            
                            <li><a class="dropdown-item" href="update">Courses</a></li>
                             
                            <li><a class="dropdown-item" href="update_events">events</a></li>
                            <!-- <li><a class="dropdown-item" href="https://iitgn.ac.in/research/library">Library</a></li> -->
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" class=" nav-link mx-3 text-dark fs-5" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">People</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="update_faculty">Faculty</a></li>
                        <?php
                            if($_SESSION['user'] == 'cse@iitgn.ac.in'){
                        ?>
                            <li><a class="dropdown-item" href="update_student">Student</a></li>
                            <li><a class="dropdown-item" href="update_staff">Staff</a></li>
                        <?php
                            }
                        ?>
                        </ul>
                    </li>

            
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="update_research">Research</a>
                    </li>

                    <?php
                        // }
                    ?>

                    <li class="nav-item dropdown user_id">
                        <a class="nav-link" href="#" class=" nav-link mx-3 text-dark fs-5" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['user'];?></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="myprofile">My Profile</a></li>
                            <li><a class="dropdown-item" href="changepassword">change password</a></li>
                            <li><a class="dropdown-item" href="logout">logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div>
        </div>

    </nav>
</header>
<?php error_reporting(0); ?>