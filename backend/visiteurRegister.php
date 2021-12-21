<?php
if ( isset( $_POST[ 'submit' ] ) ) {
    $name = htmlspecialchars( $_POST[ 'namevisiteur' ] );
    $email = htmlspecialchars( $_POST[ 'emailvisiteur' ] );
    $telephone = htmlspecialchars( $_POST[ 'telvisiteur' ] );
    $adresse = htmlspecialchars( $_POST[ 'adressevisiteur' ] );

    # Data base file
    require_once 'db.php';
    # Functions file
    require_once 'function.php';

    if ( emptyvisiteurInfo( $name, $email, $telephone, $adresse ) !== false ) {
        header( 'location: ../studentRegister.php?error=emptyInput' );
        exit();
    }
    if ( visiteurExists( $conn, $name, $telephone ) !== false ) {
        header( 'location: ../studentRegister.php?error=studentNametaken' );
        exit();
    }
    registerVisiteur( $conn, $name, $email, $telephone, $adresse );
} else {
    header( 'location: ../studentRegister.php' );
    exit();
}