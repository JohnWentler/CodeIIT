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
  
    <title>Event Edit Form</title>

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
    .textbox{
        font-weight: 600;
        font-family: 'EB Garamond', serif;
        margin-left: 10rem;
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
$query = "SELECT * from event where id ='$id'";
$query_run= mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($query_run); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $event_name = $_REQUEST['event_name'];
    $event_description = $_REQUEST['event_description'];
    $event_date =  $_REQUEST['event_date'];
    $event_venue = $_REQUEST['event_venue'];
    $event_link =  $_REQUEST['event_link']; 
    $event_time = $_REQUEST['event_time'];
    
	
    $edit = mysqli_query($conn,"update event set event_name='$event_name',
    event_description = '$event_description', event_date= '$event_date', event_venue= '$event_venue', event_link='$event_link', event_time= '$event_time' where id = '$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:update_events"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
} 
?>




<center>
<div class="data staff shadow-lg">
<h1  class="course_heading"><i class="fa-solid fa-calendar"></i> Update Event Data</h1>
<br>
<!-- <table  cellpadding=10px  cellspacing=5px style= "border:none"> -->
<form method="POST">
  
<div class="form">
    <label class="form-label" for="event_name">Event Name:</label>
    <input class="textbox" type="text" name="event_name" id="event_name" value="<?php echo $data['event_name'] ?>" placeholder="Enter Event Name" required> 
</div>
<br>

<div class="form">
    <label class="form-label" for="event_date">Event Date:</label>
    <input class="textbox" type="date" name="event_date" id="event_date" value="<?php echo $data['event_date'] ?>" placeholder="Enter Event Date" required> 
</div>
<br>

<div class="form">
    <label class="form-label" for="event_time">Time of Event:</label>
    <input class="textbox" type="time" name="event_time" id="event_time" value="<?php echo $data['event_time'] ?>" placeholder="Enter Time" required> 
</div>
<br>

<div class="form">
    <label class="form-label" for="event_description">Description:</label>
    <input class="textbox" type="text" name="event_description" id="event_description" value="<?php echo $data['event_description'] ?>" placeholder="Enter Description" required> 
</div>
<br>

<div class="form">        
    <label class="form-label" for="event_venue">Event Venue:</label>
    <input class="textbox" type="text" name="event_venue" id="event_venue" value="<?php echo $data['event_venue'] ?>" placeholder="Enter Venue" required> 
</div>
<br>

<div class="form">        
    <label class="form-label" for="event_link">Link (if any):</label>
    <input class="textbox" type="text" name="event_link" id="event_link" value="<?php echo $data['event_link'] ?>" placeholder="Enter Link" required> 
</div>
<br>

<br>

  <button type="submit" name="update" value="Update">  Update </button>

</form>
</div>
</center>
</div>

<?php 
    include_once("footers.php");
?>

</body>
</html>