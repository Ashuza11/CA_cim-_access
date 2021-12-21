<?php
if ( isset( $_POST[ 'submit' ] ) ) {
    $name = htmlspecialchars( $_POST[ 'name' ] );
    $email = htmlspecialchars( $_POST[ 'email' ] );
    $telephone = htmlspecialchars( $_POST[ 'tel' ] );
    $matricule = htmlspecialchars( $_POST[ 'matricule' ] );
    $faculte = htmlspecialchars( $_POST[ 'fac' ] );
    $promotion = htmlspecialchars( $_POST[ 'prom' ] );

    # Data base file
    require_once 'db.php';
    # Functions file
    require_once 'function.php';

    if ( emptystudentInfo( $name, $email, $telephone, $matricule,  $faculte, $promotion ) !== false ) {
        header( 'location: ../studentRegister.php?error=emptyInput' );
        exit();
    }
    if ( studentExists( $conn, $name, $matricule ) !== false ) {
        header( 'location: ../studentRegister.php?error=studentNametaken' );
        exit();
    }
    registerStudent( $conn, $name, $email, $telephone, $matricule, $faculte, $promotion );
} else {
    header( 'location: ../studentRegister.php' );
    exit();
}