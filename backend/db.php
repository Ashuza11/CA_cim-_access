<?php

# Cimé Access web app db management 
$serverName = "localhost";
$dBuserName = "root";
$dBpassword = "";
$dBname = "cimeaccess";

$conn = mysqli_connect($serverName, $dBuserName, $dBpassword, $dBname);

# Gerer les erros 
if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}