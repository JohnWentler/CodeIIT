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
   
    <title>Events database</title>

    <style>
        @media only screen and (max-width: 767px){
        .textbox{
            width: 200px;
        }
    }

    </style>

</head>

  
<body>

<?php 
    include_once("Headers.php");
?>
<center>
<div class="data event shadow-lg">
    <h1><i class="fa-solid fa-calendar"></i> Events database</h1><br>
    <!-- <table  cellpadding=10px  cellspacing=5px style= "border:none"> -->

    <form action="event_input" method="post" enctype="multipart/form-data">
    <table border=1>
        <tbody>
            <tr>
                <th><label class="form-label" for="event_name">&nbsp; Event Name:</label></th>
                <th><input class="textbox" type="text" placeholder="Enter Event Name" name="event_name" id="event_name" required></th>
            </tr>
            
            <tr>
                <th><label class="form-label" for="event_date">&nbsp; Event Date:</label></th>
                <th><input class="textbox" type="date" placeholder="Enter Event Date" name="event_date" id="event_date" required></th>
            </tr>
            
            <tr>
                <th><label class="form-label" for="event_time">&nbsp; Time of Event:</label></th>
                <th><input class="textbox" type="time" placeholder="Enter Event Time" name="event_time" id="event_time" required></th>
            </tr>
            
            <tr>
                <th><label for="event_description">&nbsp; Description:</label></th>
                <th><textarea type="text" placeholder="Enter Event Description"name="event_description" id="event_description" rows="2" cols="20" required></textarea></th>
            </tr>
            
            <tr>
                <th><label class="form-label" for="event_venue">&nbsp; Event Venue:</label></th>
                <th><input class="textbox" type="text" placeholder="Enter Event Venue" name="event_venue" id="event_venue" required></th>
            </tr>
            
            <tr>
                <th><label class="form-label" for="event_link">&nbsp; Link (if any):</label></th>
                <th><input class="textbox" type="text" placeholder=" Link" name="event_link" id="event_link" required></th>
            </tr>
            
            
        </tbody>
        
    </table>

        <!-- <div class="form">
            <input class="textbox" type="text" placeholder=" " name="event_name" id="event_name">
            <label class="form-label" for="event_name">&nbsp; Event Name:</label>
        </div>
        <br>

        <div class="form">
            <input class="textbox" type="date" placeholder=" " name="event_date" id="event_date">
            <label class="form-label" for="event_date">&nbsp; Event Date:</label>
        </div>
        <br>

        <div class="form">
            <input class="textbox" type="time" placeholder=" " name="event_time" id="event_time">
            <label class="form-label" for="event_time">&nbsp; Time of Event:</label>
        </div>
        <br>
        
        <div class="form">
            <textarea type="text" placeholder=" "name="event_description" id="event_description" rows="3" cols="20"></textarea>
            <label for="event_description">&nbsp; Description:</label>
        </div>
        <br>

        <div class="form">
            <input class="textbox" type="text" placeholder=" " name="event_venue:" id="event_venue:">
            <label class="form-label" for="event_venue:">&nbsp; Event Venue:</label>
        </div>
        <br>
        
        <div class="form">
            <input class="textbox" type="text" placeholder=" " name="event_link" id="event_link">
            <label class="form-label" for="event_link">&nbsp; Link (if any):</label>
        </div>
        <br>
        <div class="form">
            <input class="textbox" type="text" placeholder=" " name="event_name" id="event_name">
            <label class="form-label" for="event_name">&nbsp; Event Name:</label>
        </div>
        <br>

        <div class="form">
            <input class="textbox" type="date" placeholder=" " name="event_date" id="event_date">
            <label class="form-label" for="event_date">&nbsp; Event Date:</label>
        </div>
        <br>

        <div class="form">
            <input class="textbox" type="time" placeholder=" " name="event_time" id="event_time">
            <label class="form-label" for="event_time">&nbsp; Time of Event:</label>
        </div>
        <br>
        
        <div class="form">
            <textarea type="text" placeholder=" "name="event_description" id="event_description" rows="3" cols="20"></textarea>
            <label for="event_description">&nbsp; Description:</label>
        </div>
        <br>

        <div class="form">
            <input class="textbox" type="text" placeholder=" " name="event_venue:" id="event_venue:">
            <label class="form-label" for="event_venue:">&nbsp; Event Venue:</label>
        </div>
        <br>
        
        <div class="form">
            <input class="textbox" type="text" placeholder=" " name="event_link" id="event_link">
            <label class="form-label" for="event_link">&nbsp; Link (if any):</label>
        </div>
        <br>
         -->
        

        <div>
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
        $event_name = $_REQUEST['event_name'];
        $event_description = $_REQUEST['event_description'];
        $event_date =  $_REQUEST['event_date'];
        $event_venue = $_REQUEST['event_venue'];
        $event_link =  $_REQUEST['event_link']; 
        $event_time = $_REQUEST['event_time'];
        // Performing insert query execution
        // here our table name is csefaculty
        $sql = "INSERT INTO event (event_name,event_description, event_date, event_venue, event_link, event_time) VALUES ('$event_name','$event_description', '$event_date', '$event_venue', '$event_link', '$event_time')";
          
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
                . mysqli_error($conn)
            </script>";
        }
        // Close connection
        mysqli_close($conn);
    }
        ?>
    </center>
    <!--Bootstrap Scripts-->
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<?php 
    include_once("Footers.php");
?>
</body>
</html>