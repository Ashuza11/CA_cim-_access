<?php
    if (isset($_POST["submit"])){
        $name = $_POST["name"];
        $postName = $_POST["secondName"];
        $lastName = $_POST["lastName"];
        $matricule = $_POST["matricule"];
        $faculte = $_POST["faculte"];
        $promotion = $_POST["promotion"];
        

        # Data base file 
        require_once 'db.php';
        # Functions file
        require_once 'function.php';

        if (emptystudentInfo($name, $postName, $lastName, $matricule,  $faculte, $promotion) !== false) {
            header("location: ../studentRegister.php?error=emptyInput");
            exit();
        }
        if (studentExists($conn, $name, $matricule) !== false) {
            header("location: ../studentRegister.php?error=studentNametaken");
            exit();
        }
        registerStudent($conn, $name, $postName, $lastName, $matricule, $faculte, $promotion);
        }
    else {
        header("location: ../studentRegister.php");
        exit();
}