<?php
# connection à la base de donnée

include 'db.php';

# Show 3 guest

$query = "SELECT * FROM `register_guest` ORDER BY guestId 
DESC LIMIT  3";
$query_run = mysqli_query( $conn, $query );

# Show 3 students

$query1 = "SELECT * FROM `register_student` ORDER BY studentId 
DESC LIMIT  3";
$query_run1 = mysqli_query( $conn, $query1 );

?>