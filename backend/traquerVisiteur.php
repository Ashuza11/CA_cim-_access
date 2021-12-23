<?php
if ( isset( $_POST[ 'submit' ] ) ) {

    $tel = htmlspecialchars( $_POST[ 'telvisiteur' ] );
    $time = htmlspecialchars( $_POST[ 'durationvisiteur' ] ) ;
    $motif = htmlspecialchars( $_POST[ 'motifvisiteur' ] );

    # Include files
    require_once 'db.php';

    $query1 = "SELECT * FROM `register_guest` WHERE telephone = $tel ";
    $result = mysqli_query( $conn, $query1 );
    $tabResult = $result->fetch_array( MYSQLI_ASSOC );
    if ( empty( $tabResult ) ) {
        header( 'location: ../traque.php?error=NotFound' );
    }

    $sql = 'INSERT INTO traque_guest (telephone,motif,duration) VALUES (?, ?, ?)' ;

    $stmt = mysqli_stmt_init( $conn );
    # Initialise an new prepared statement
    # Check if it doesn't fail
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header( 'location: ../traque.php?error = ConnectionFailed' );
    }
    mysqli_stmt_bind_param($stmt, "sss", $tel, $motif, $time );
    $result =  mysqli_stmt_execute( $stmt );
    mysqli_stmt_close( $stmt );
    if($result == True){
        header( 'location: ../traque.php?Traque = Succes' );
    }
} else {
    header( 'location: ../traque.php' );
}

