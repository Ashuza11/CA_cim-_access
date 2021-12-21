<?php

# Cimé Access web app db management
$serverName = 'localhost';
$dBuserName = 'root';
$dBpassword = '';
$dBname = 'cime_access';

$conn = mysqli_connect( $serverName, $dBuserName, $dBpassword, $dBname );

# Gerer les erros
if ( !$conn ) {
    die( 'connection failed: ' . mysqli_connect_error() );
}