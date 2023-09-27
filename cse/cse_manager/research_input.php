<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IITGN.png" type="image/png">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style(header).css">
    <link rel="stylesheet" href="style(footer).css">
    <link rel="stylesheet" href="style(input).css">
    <!-- <link rel="stylesheet" href="style(l).css"> -->
    
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
   
    
    <title>Research Database</title>
    <!-- <style>
    
        body{
            background-color: #f9f9ff;
        }
        .research h1{
            font-size: 2rem;
            font-weight: 600;
            font-family: 'EB Garamond', serif;
            text-align: center;
        }
        
        .research{
            margin-top: 6rem;
            padding: 4rem;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 10px 10px 2px -4px rgba(0, 0, 0, 0.25);
        }
        button{
            cursor: pointer;
            padding: 0.5rem 7rem;
            border: none;
            border-radius: 7px;
            font-weight: 900;
        }
        button:hover{
            color: #ffffff;
            border: none;
            background-color: #0070FF;
            transform: translateY(-0.5px);
        }
        button{
            transition: background 1s, transform 0.9s;
        }
        th{
            text-transform: uppercase;
        }
        
    </style>
     -->
</head>
  
<body>

<?php 
    include_once("Headers.php");
?>
<center>
    <!-- <table border= 1>
        <tbody>
            <tr>
                <th><label class="form-label" for="area">&nbsp; Choose Faculty:</label></th>

                <th>
                    <select class="textbox" id= 'faculty_name' name = 'faculty_name'>
                    <option class="text" style=" color: red;">Please t Your Name</option>

                    <?php          
                        include_once('dbcsemanager.php');
                    
                        $query = 'SELECT * FROM `csefaculty` order by full_name asc';
                        $query_run = mysqli_query($conn,$query);
                        $check_query = mysqli_num_rows($query_run)>0;
                        if($row= mysqli_fetch_assoc($query_run))
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                            ?>
                                <option value="<?php echo $row["full_name"]; ?>"> <?php echo $row["full_name"]; ?></option>
                                <?php

                        }}
                                
                    ?>
                    </select>
                </th>
            </tr>
        </tbody>
    </table>
 -->


    <div class="data research shadow-lg">
    <h1><i class="fa-brands fa-researchgate"></i> Research database</h1><br>
    <!-- <table  cellpadding=10px  cellspacing=5px style= "border:none"> -->
    <form action="research_input" method="post" enctype="multipart/form-data">

        <div class="form">
            <!-- <label class="form-label" for="area">&nbsp; Choose Faculty:</label> -->

            <select class="textbox" placeholder=" "  id= 'faculty_name' name = 'faculty_name' required=" ">
                <option class="option"  style="color: red;" value="<?php echo $row["full_name"]; ?>" required>Please Select Your Name</option>
                <?php          
                    include_once('dbcsemanager.php');
                
                    $query = "SELECT * FROM `csefaculty` order by full_name asc";
                    $query_run = mysqli_query($conn,$query);
                    $check_query = mysqli_num_rows($query_run)>0;
                    // if($row= mysqli_fetch_assoc($query_run))
                    if($check_query)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                        ?>
                            <option value="<?php echo $row["full_name"]; ?>"> <?php echo $row["full_name"]; ?></option>
                            <?php

                    }}
                            
                ?>
            </select>
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="email_id">&nbsp; Email_id</label>
            <input class="textbox" type="text" placeholder="Enter Email-Id" name="email_id" id="email_id" required>
        </div>
        <br>

        
        <div class="form">
            <label class="form-label" for="about">&nbsp; About:</label>
            <input class="textbox" type="text" placeholder="Enter About" name="about" id="about">
        </div>
        <br>
        
        <div class="form">
            <label class="form-label" for="year">&nbsp; Publication Year:</label>
            <input class="textbox" type="month"   name="year" id="year" required>
        </div>
        <br>
        
        <div class="form">
            <label class="form-label" for="title">&nbsp; Title of Research Paper:</label>
            <input class="textbox" type="text" placeholder="Enter Title of Research Paper" name="title" id="title" required>
        </div>
        <br>

        <div class="form">
            <label class="form-label" for="paper_link">&nbsp; Link of The Research Paper:</label>
            <input class="textbox" type="text" placeholder="Enter Link" name="paper_link" id="paper_link" required>
        </div>
        <br>

        <div style="margin:10px">
            <button type="submit" name="upload">UPLOAD</button>
        </div>

    </form>
</div>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => csewebsite
        if (isset($_POST['upload'])) {
                  
            include_once("dbcsemanager.php");
        // Taking all values from the form data(input)
        $faculty_name =  $_REQUEST['faculty_name'];
        $email_id = $_REQUEST['email_id'];
        $years = $_REQUEST['year'];
        $about = $_REQUEST['about'];
        $title =  $_REQUEST['title'];
        $paper_link = $_REQUEST['paper_link'];
        
        
          
        // Performing insert query execution
        // here our table name is csefaculty
        $sql = "INSERT INTO research (faculty_name,email_id,years,about, title, paper_link) VALUES ('$faculty_name','$email_id','$years','$about', '$title','$paper_link')";
          
        if(mysqli_query($conn, $sql)){
            // echo "<h3>data stored in a database successfully." 
            //     . " Please browse your localhost php my admin" 
            //     . " to view the updated data</h3>"; 
            echo "
            <script type= 'text/javascript'>
                alert('New record created successfully');
            </script>";
  
            // echo nl2br("\n$first_name\n $last_name\n "
            //     . "$gender\n $address\n $email");
        } else{
            echo " <script type= 'text/javascript'>
            ERROR: Hush! Sorry $sql.  
                . mysqli_error($conn);
            </script>";
        }
        // Close connection
        mysqli_close($conn);
    }
        ?>
    </center>
 
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<?php 
    include_once("Footers.php");
?>
</body>
</html>
