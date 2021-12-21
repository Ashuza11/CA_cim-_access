<?php

function EtudiantEnregistre () {
    require 'db.php';
    $sudent1 = 'SELECT  COUNT(*) AS count FROM `register_student` ';
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function EtudiantTraque () {
    require 'db.php';
    $sudent1 = 'SELECT  COUNT(*) AS count FROM `traque_student`';
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output1 = $data1[ 'count' ];
        }
    }
    return $output1;
}

function VisiteurEnregistre () {
    require 'db.php';
    $sudent1 = 'SELECT  COUNT(*) AS count FROM `register_guest` ';
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function FSTAEnregistre () {
    require 'db.php';
    $sudent1 = "SELECT  COUNT(*) AS count FROM `register_student` WHERE faculty='FSTA'";
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function FSEGEnregistre () {
    require 'db.php';
    $sudent1 = "SELECT  COUNT(*) AS count FROM `register_student` WHERE faculty='FSGE'";
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function FTEnregistre () {
    require 'db.php';
    $sudent1 = "SELECT  COUNT(*) AS count FROM `register_student` WHERE faculty='FT'";
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function FDEnregistre () {
    require 'db.php';
    $sudent1 = "SELECT  COUNT(*) AS count FROM `register_student` WHERE faculty='FD'";
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function FSDCEnregistre () {
    require 'db.php';
    $sudent1 = "SELECT  COUNT(*) AS count FROM `register_student` WHERE faculty='FSDC'";
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function FPSEEnregistre () {
    require 'db.php';
    $sudent1 = "SELECT  COUNT(*) AS count FROM `register_student` WHERE faculty='FPSE'";
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function FMEDEnregistre () {
    require 'db.php';
    $sudent1 = "SELECT  COUNT(*) AS count FROM `register_student` WHERE faculty='FMED'";
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function VisiteurTraque() {
    require 'db.php';
    $sudent1 = 'SELECT  COUNT(*) AS count FROM `traque_guest`';
    $query_run1 = mysqli_query( $conn, $sudent1 );
    if ( mysqli_num_rows( $query_run1 ) > 0 ) {
        while( $data1 = mysqli_fetch_assoc( $query_run1 ) ) {
            $output = $data1[ 'count' ];
        }
    }
    return $output;
}

function NombreHeure () {

    function sumTraqueEtudiant() {

        require 'db.php';

        $traqueEtudiant = 'SELECT SUM(duration) AS sum FROM traque_student';
        $result = mysqli_query( $conn, $traqueEtudiant );
        if ( mysqli_num_rows( $result ) > 0 ) {
            while( $row = mysqli_fetch_assoc( $result ) ) {
                $output = $row[ 'sum' ];
            }
        }
        return $output;
    }

    function sumTraqueVisiteur() {
        require 'db.php';

        $traqueVisiteur = 'SELECT SUM(duration) AS sum FROM traque_guest';
        $result = mysqli_query( $conn, $traqueVisiteur );
        if ( mysqli_num_rows( $result ) > 0 ) {
            while( $row = mysqli_fetch_assoc( $result ) ) {
                $output = $row[ 'sum' ];
            }
        }
        return $output;
    }
    $output1 = sumTraqueEtudiant();
    $output2 = sumTraqueVisiteur();
    $output = $output1 + $output2;

    return $output;
}

?>