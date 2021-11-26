<?php

if (isset($_POST["submit"])){

    $adminName = $_POST["name"];
    $adminPwd = $_POST["pwd"];

    # Data base file 
    require_once 'db.php';
    # Functions file
    require_once 'fonction.php';

    if (emptyInputLogin($adminName, $adminPwd) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }
    loginUser($conn, $adminName, $adminPwd);
}
else {
    header("location: ../index.php");
}