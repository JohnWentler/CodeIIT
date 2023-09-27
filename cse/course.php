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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
	
	<link rel="stylesheet" href="css/style(header).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(Course).css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="css/style(footer).css?v=<?php echo time(); ?>">
	<title>IITGN CSE | Courses</title>
	<script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>

</head>
<body class="">
<!-- ====================S-HEADER================== -->
<?php include_once "Header.php" ?>
<!-- =====================E-HEADER================= -->

<div class="Course">
    <!-- <h1 style="text-align: center; font-family: 'Merriweather', serif;">ACADAMIC</h1><br> -->
    <h2>Courses</h2>
</div>
<div class="courses bg-succes">

    <div class="container bg-dar">
        <?php
        include_once("cse_manager/dbcsemanager.php");
        $query = "SELECT course_code, course_name,course_description,Credits,preferred_sem_btech,preferred_sem_mtech,offered_in,type,area,course_link from courses";
        $query_run= mysqli_query($conn,$query);
        $check_courses = mysqli_num_rows($query_run)>0;
        echo "<div class = 'table-responsive bg-pimary'>";
        echo "<table id = 'table_id' class='table table-striped table-bordered table-sm table-hover table-responsive' cellspacing='0' style='display: inline-table;'>
        <thead class = ' '>
        <tr>
            <th> Course Code </th>
            <th> Course Name </th>
            <th> course_description </th>
            <th> Credits </th>
            <th> Preferred Semester (BTech) </th>
            <th> Preferred Semester (MTech) </th>
            <th> Offered In (Even/Odd Semester) </th>
            <th> Type  </th>
            <th> Area </th>
        </tr>
        </thead>";
        if($check_courses)
            {
                echo "<tbody>";
                while($row= mysqli_fetch_assoc($query_run))
                {
                    echo "<tr>";
                    echo "<td style='color: blu' class='dtr-control sorting_1'>" .$row["course_code"]."</td>";
                    echo "<td><a href= ".$row['course_link']." style='text-decoration: none;  color: blue;'>" .$row["course_name"]."</a></td>";
                    echo "<td>" .$row["course_description"]."</td>";
                    echo "<td>" .$row["Credits"]."</td>";
                    // echo "<td>" .$row["L"]."</td>";
                    // echo "<td>" .$row["T"]."</td>";
                    // echo "<td>" .$row["P"]."</td>";
                    echo "<td>" .$row["preferred_sem_btech"]."</td>";
                    echo "<td>" .$row["preferred_sem_mtech"]."</td>";
                    echo "<td>" .$row["offered_in"]."</td>";
                    echo "<td>" .$row["type"]."</td>";
                    echo "<td>" .$row["area"]."</td>";
                    echo "</tr>";
                }
                echo "<tbody>";
                echo "</table>";
            }
            else
            {
                echo "No Course found";
            }
            echo "</div>";
            mysqli_close($conn)
        ?>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
</script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
</script>

<script>
	$(document).ready(function () {
    $('#table_id').DataTable();
});
</script>

</script>
<script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- ============================S-FOOTER================= -->
<?php include_once "Footer.php" ?>
<!-- ============================E-FOOTER================= -->
    
</body>
</html>