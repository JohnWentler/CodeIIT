<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="im/IITGN.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">

    <title>IITGN CSE | Event</title>
    
    <link rel="stylesheet" href="css/style(Event).css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	  <link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <!-- =======================S-HEADER===================== -->
  <?php include_once "Header.php"?>
  <!-- ============================E-HEADER================= -->

    <div class="event-container">
      <h2 class="year">Events</h2>
      
        <?php
          include_once("cse_manager/dbcsemanager.php");
          $query = "SELECT DAY(event_date) as event_dt,YEAR(event_date) as year, MONTHNAME(event_date) as mnth, event_name, event_description,event_venue,event_link, TIME_FORMAT( event_time, '%h:%i %p' ) as e_time from event ORDER BY event_date desc";
          $query_run= mysqli_query($conn,$query);
          $check_query = mysqli_num_rows($query_run)>0;
          if($check_query)
          {
            // echo "<ul>";
            while($row= mysqli_fetch_assoc($query_run))
            {
              echo "
                <div class='event'>
                    <div class='event-left'>  
                        <div class='event-date'>
                          <div class='date'>".$row['event_dt']."</div>
                          <div class='month'>".$row['mnth']."</div>
                          <div class='year'>".$row['year']."</div>
                           
                        </div>
                    </div>
                    <div class='event-right'>
                      <h3 class='event-title'>".$row['event_name']."</h3>
                      <div class='event-description'>".$row['event_description']."</div>

                      <div class='event-timing'>
                        <p> <b> Time: </b>".$row['e_time']."</p>
                      </div>
                      <p> 
                      
                      <b> Venue: </b>".$row["event_venue"]." </p>
                      
                      <p> 
                        <a href = ".$row['event_link']." ><b>Link for Event</b></a>
                      </p>
                    </div>
                  </div>";
            }
                    
              // echo "</ul>";
          }
        ?>      
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
