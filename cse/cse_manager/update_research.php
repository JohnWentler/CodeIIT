<!DOCTYPE html>
<html>
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
<script src="https://kit.fontawesome.com/b4cef7db2c.js" crossorigin="anonymous"></script>

<title>update Research</title>

<style>
    body{
        background-color: #f9f9ff;
        overflow-x: hidden;  
    }
    .course_heading h1,h3{
        text-align: center;
    }
    .course_heading h1,h3{
        font-weight: 600;
        font-family: 'EB Garamond', serif;
    }
    .course_heading{
        margin-top: 5.5rem;
    }

    .course{
        min-width: 50rem; 
    }
    .row{
        /* background-color: #f9f9ff; */
        margin: 0rem 2rem;
    }
    .wrapper {
        margin-top: 3rem;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 2rem; 
    }
    table{
        background-color: #f9f9ff;
        font-size: 14px;
    }
    th{
        text-transform: uppercase;
    }
    .button{
        cursor: pointer;
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 7px;
        font-weight: 900;
    }
    .button:hover{
        color: #ffffff;
        border: none;
        background-color: #0070FF;
        transform: translateY(-0.5px);
    }
    .button{
        transition: background 1s, transform 0.9s;
    }
    .button a{
        color: black;
        text-decoration: none;
    }
    .button a:hover{
        color:white;
    }
</style>
    
</head>

<body>
<?php 
    include_once("Headers.php");
?>
 

    <div class = "course_heading">
        <h1>Research</h1>
        <br/>
    </div>

    <div class= "course">
        <div class="row">
            <?php
            include_once("dbcsemanager.php");
            $query = "SELECT * from research order by faculty_name asc";
            $query_run= mysqli_query($conn,$query);
            $check_faculty = mysqli_num_rows($query_run)>0;
            echo "<div class = 'table-responsive'>";
            echo "<table id = 'table_id' class='table table-striped table-bordered table-sm table-hover table-responsive' cellspacing='0'>
            <thead>
            <tr>
                <th> Id </th>
                <th> Name </th>
                <th> Email </th>
                <th> about </th>
                <th> Years </th>
                <th> Title  </th>
                <th> Paper Link </th>
                <th> Edit </th>
                <th> Delete </th>
            </tr>
            </thead>";

            if($_SESSION['user'] == 'cse@iitgn.ac.in'){

                if($check_faculty)
                {
                    echo "<tbody>";

                    while($row= mysqli_fetch_assoc($query_run))
                    {
                        echo "<tr>";
                        echo "<td>" .$row["id"]."</td>";
                        echo "<td>" .$row["faculty_name"]."</td>";
                        echo "<td>" .$row["email_id"]."</td>";
                        echo "<td>" .$row["about"]."</td>";
                        echo "<td>" .$row["years"]."</td>";
                        echo "<td>" .$row["title"]."</td>";
                        echo "<td>" .$row["paper_link"]."</td>";
                        echo "<td><a href='edit_research?id=" .$row['id']."'> Edit </a></td>";
                        echo "<td><a href='delete_research?id=" .$row['id']."'> Delete </a></td>";
                        echo "</tr>";
                    }
                    echo "<tbody>";
                    echo "</table>";
                    }
                else
                {
                    echo "No Student found";
                }
        }
        elseif($_SESSION['user'])
        {
            echo '<center>';
            echo  'Now U R in elseif';
            echo '<br>';echo '<br>';
            echo '</center>';


            $email_id = $_SESSION["user"];
            $query_cse = "SELECT * from research where email_id ='$email_id' order by id"; 
            $query_fac= mysqli_query($conn,$query_cse);
            $check_faculty = mysqli_num_rows($query_run)>0;

            if($check_faculty)
            {
                while($row= mysqli_fetch_assoc($query_fac)){

                    // print_r($row);
                    echo "<tbody>";

                    echo "<tr>";
                    echo "<td>" .$row["id"]."</td>";
                    echo "<td>" .$row["faculty_name"]."</td>";
                    echo "<td>" .$_SESSION["user"]."</td>";
                    echo "<td>" .$row["about"]."</td>";
                    echo "<td>" .$row["years"]."</td>";
                    echo "<td>" .$row["title"]."</td>";
                    echo "<td>" .$row["paper_link"]."</td>";
                    echo "<td><a href='edit_research?id=" .$row['id']."'> Edit </a></td>";
                    echo "<td><a href='delete_research?id=" .$row['id']."'> Delete </a></td>";
                    echo "</tr>";
                    
                    echo "<tbody>";
                }
                echo "</table>";
                }
            else
            {
                echo "No Student found";
            }
        }

            echo "</div>";
            mysqli_close($conn)
            ?>
        </div>
    </div>
    <div class = "extrabtn">
        <div class = 'wrapper'>
        <button class='button'><a href='research_input'> Add new Research Paper </a></button>
        </div>
        </div>

 
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>


<script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<?php 
      include_once("Footers.php");
?>
</body>
</html>