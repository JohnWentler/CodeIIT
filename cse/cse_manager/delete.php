<?php
 include_once("dbcsemanager.php"); 
$sql = "DELETE FROM courses WHERE course_code='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    mysqli_close($conn);
    header("location:update"); // redirects to all records page
    exit;
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>