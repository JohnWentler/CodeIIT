<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="IITGN.png" type="image/png">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    
    <link rel="stylesheet" href="style(header).css">
    <link rel="stylesheet" href="style(footer).css">
    <link rel="stylesheet" href="style(update).css">
    <!-- <link rel="stylesheet" href="style(l).css"> -->

    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>

    <title>Research Edit Form</title>
    <!-- <style> 
        body{
            background-color: #f9f9ff;
        }
        h1{
            font-weight: 900;
            margin-top: 10rem;
            text-align: center;
        }
        button{
            cursor: pointer;
            padding: 4px;
            border-radius: 20px;
            font-weight: 600;
        }
        button:hover{
            /* border: none; */
            color: #fff;
            background-color: #0070FF;
            /* transform: translateY(-0.5px); */
        }
        button{
            transition: background 1s, transform 0.9s;
        }
        .form-label{
            margin-left: -10rem;
        }
    </style>
 -->

</head>

<body>
 
<?php 
      include_once("headers.php");
?>
<div class='courses'>
<?php

include_once("dbcsemanager.php");

$id = $_GET['id']; // get id through query string
$query = "SELECT * from research where id ='$id'";
// $query = "SELECT * FROM `csefaculty` order by full_name asc"; // don't Use Query this line 
$query_run= mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($query_run); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $faculty_name =  $_POST['faculty_name'];
    $email_id =  $_POST['email_id'];
    $years = $_POST['year'];
    $about = $_POST['about'];
    $title =  $_POST['title'];
    $paper_link = $_POST['paper_link'];
    
	
    $edit = mysqli_query($conn,"update research set faculty_name='$faculty_name', email_id = '$email_id' , 
    years= '$years', about = '$about', title= '$title', paper_link= '$paper_link' where id = '$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:update_research"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
} 
?>


<center>
<div class="data faculty shadow-lg">

<h1 class='course_heading'><i class="fa-brands fa-researchgate"></i> Update Research Data</h1>
<br>
<form method="POST">
  
<div class="form">
    <label class="form-label" for="area">Choose Faculty:</label>
    <!-- <select id= 'faculty_name' name = 'faculty_name' value="<?php echo $data['faculty_name'] ?>" Required> -->
    <select class="textbox" placeholder=" " id= 'faculty_name' name = 'faculty_name' required=" ">

    <!-- <option class="text" style=" color: red; " required=" "  >Please Select Your Name</option> -->
    <option class="text" style=" color: red; " value="<?php echo $row["full_name"]; ?>" required>Please Select Your Name </option>
        <?php          
            include_once('dbcsemanager.php');
        
            $query = "SELECT * FROM `csefaculty` order by full_name asc";
            $query_run = mysqli_query($conn,$query);
            $check_query = mysqli_num_rows($query_run)>0;
            if($check_query)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                ?>
                    <option value="<?php echo $row["full_name"]; ?>" Required> <?php echo $row["full_name"]; ?></option>
                    <?php

            }}
        ?>
        <!-- <option value="<?php echo $data['full_name'] ?>"><?php echo $data['full_name'] ?></option> -->
        
        <!-- <option value="Bireswar Das">Bireswar Das</option>
        <option value="Bireswar Das">Anirban Dasgupta</option>
        <option value="Manoj Gupta">Manoj Gupta</option>
        <option value="Neeldhara Misra">Neeldhara Misra</option>
        <option value="Krishna P Miyapuram">Krishna P Miyapuram</option>
        <option value="Shanmuganathan Raman">Shanmuganathan Raman</option>
        <option value="Mayank Singh">Mayank Singh</option>
        <option value="Balagopal Komarath">Balagopal Komarath</option>
        <option value="Sameer G Kulkarni">Sameer G Kulkarni</option>
        <option value="Abhishek Bichawat">Abhishek Bichawat</option> -->
    </select>
</div>
<br>

<div class="form">
    <label class="form-label" for="email_id">&nbsp; Email_id</label>
    <input class="textbox" type="text" value="<?php echo $data['email_id'] ?>" name="email_id"  id="email_id" readonly="readonly" required >
</div>
<br>

<div class="form">
    <label class="form-label" for="year">&nbsp; Publication Year:</label>
    <input class="textbox" type="month" placeholder=" " name="year" id="year" Required=" ">
</div>
<br>

<div class="form">
    <label class="form-label" for="about">About</label>
    <input class="textbox" type="text" value="<?php echo $data['about'] ?>" name="about" id="about"  placeholder="Enter about" Required>
</div>
<br>

<div class="form">
    <label class="form-label" for="title">Title of Research Paper:</label>
    <!-- <input class="textbox" type="text" name="title" id="title" value="<?php echo $data['title'] ?>" placeholder="Enter Title" Required> -->
    <input class="textbox" type="text" name="title" id="title" value="<?php echo $data['title'] ?>" placeholder="Enter Title" Required>
</div>
<br>


<div class="form">
    <label class="form-label" for="paper_link">Link to the Research Paper:</label>
    <!-- <input class="textbox" type="text" name="paper_link" id="paper_link" value="<?php echo $data['paper_link'] ?>" placeholder="Enter Link" Required> -->
    <input class="textbox" type="text" name="paper_link" id="paper_link" value="<?php echo $data['paper_link'] ?>" placeholder="Enter Link" Required>
</div>
<br>
                        
<button type="submit" name="update" value="Update">Update</button>
<br>

</form>
</div>
</center>
</div>

<?php 
    include_once("footers.php");
?>

</body>
</html>