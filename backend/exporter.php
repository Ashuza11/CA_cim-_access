<?php
try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=cime_access;charset=utf8', 'root', '' );
} catch ( Exception $e ) {
    die( 'Erreur : ' . $e->getMessage() );
}

$select = $bdd->prepare( "SELECT * FROM traque_student" );
$select->setFetchMode( PDO::FETCH_ASSOC );
$select->execute();

$newReservations = $select->fetchAll();
$excel1 = "\r LISTE DES TRAQUES DES ETUDIANTS \n\n";
$excel = " ";
$excel .=  " NUM \t MATRICULE \t MOTIF \t DUREE \t DATE & HEURE \n";
$id=0;

foreach ( $newReservations as $row ) {
    $id++;
    $excel .= "$id\t$row[matricule]\t$row[motif]\t$row[duration]\t$row[dateandTime]\n";
}

header( "Content-type: application/vnd.ms-excel" );
header( "Content-disposition: attachment; filename=liste-traque des Etudiants.xls" );
print $excel1;
print $excel;
exit;

?>