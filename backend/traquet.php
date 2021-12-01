<?php 


if (isset($_POST["submit"])) {

    $matricule = $_POST["Matricule"];
    $dateTime = $_POST["dateTime"];
    $time = $_POST["time"];
    $motif = $_POST["motif"];

    # Include files 
    require_once 'db.php';
    require_once 'function.php';

    # check if form was submited 

    # hundle errors 
    
    # Isert data 
    traquetPresence($conn, $matricule, $dateTime, $time, $motif);
}
else {
    header("location: ../traque.php");
}