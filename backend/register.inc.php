<?php

if ( isset( $_POST[ 'submit' ] ) ) {

    $name = $_POST[ 'nom' ];
    $email = $_POST[ 'email' ];
    $pwd = $_POST[ 'pwd' ];
    $pwdRepeat = $_POST[ 'cpwd' ];

    # Gerer les errers qui peuvent arriver en utilisants les fonctions
    # Du fichier register_fonction.php
    require_once 'db.php';
    require_once 'function.php';

    # Backside validation
    # 1. Verifier si les formilaire a etait bien remplit

    # Ne fonctione pas encore
    // if ( emptyInputSignup( $name,  $userUid, $email, $pwd, $pwdRepeat ) !== false ) {
    //     header( 'location: ../register.php?error=emptyinput' );
    //     exit();
    // }
    if ( invalidAdminName( $name ) !== false ) {
        header( 'location: ../parameter.php?error=invaliduid' );
        exit();
    }
    // if ( invalidEmail( $email ) !== false ) {
    //     header( 'location: ../register.php?error=invalidemail' );
    //     exit();
    // }

    # Fonctione
    if ( PwdMatch( $pwd, $pwdRepeat ) !== false ) {
        header( 'location: ../parameter.php?error=passworddontmatch' );
        exit();
    }
    # Verifier si le nom existe dans la base des données
    if ( AdminExists( $conn,  $name, $email ) !== false ) {
        header( 'location: ../parameter.php?error=ussenametaken' );
        exit();
    }

    # Tous est bon Enregistre l'utilisateur en utilisant la fonction Createuser
    creatAdmin( $conn, $name,  $email, $pwd );
} else {
    header( 'location: ../index.php' );
    exit();
}
?>