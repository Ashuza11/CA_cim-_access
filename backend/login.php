<?php

if ( isset( $_POST[ 'submit' ] ) ) {

    $name = $_POST[ 'name' ];
    $pwd = $_POST[ 'pwd' ];

    # Data base file
    require_once 'db.php';
    # Functions file
    require_once 'function.php';

    if ( emptyInputLogin( $name, $pwd ) !== false ) {
        header( 'location: ../index.php?error=emptyinput' );
        exit();
    }
    loginAdmin( $conn, $name, $pwd );
} else {
    header( 'location: ../admin.php' );
}