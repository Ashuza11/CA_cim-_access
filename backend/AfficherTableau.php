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

#show 3 student traque
$query2 = "SELECT * FROM `traque_student` INNER JOIN `register_student` ON traque_student.matricule = register_student.matricule ORDER BY Id 
DESC LIMIT  3";
$query_run2 = mysqli_query( $conn, $query2 );

#show 3 guest traque
$query3 = "SELECT * FROM `traque_guest` INNER JOIN `register_guest` ON traque_guest.telephone = register_guest.telephone ORDER BY Id 
DESC LIMIT  3";
$query_run3 = mysqli_query( $conn, $query3 );

?>