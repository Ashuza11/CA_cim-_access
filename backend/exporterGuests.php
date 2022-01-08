<?php
try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=cime_access;charset=utf8', 'root', '' );
} catch ( Exception $e ) {
    die( 'Erreur : ' . $e->getMessage() );
}

$select = $bdd->prepare( 'SELECT *FROM register_guest' );
$select->setFetchMode( PDO::FETCH_ASSOC );
$select->execute();

$newReservations = $select->fetchAll();
$excel1 = "\r LISTE DES TRAQUES DES ETUDIANTS \n\n";
$excel = " ";
$excel .= " NUM \t NOM \t EMAIL \t TELEPHONE \t ADRESSE \n";
$id=0;
foreach ( $newReservations as $row ) {
    $id++;
    $excel .= "$id\t$row[guestName]\t$row[guestEmail]\t$row[telephone]\t$row[Adresse]\n";
}

header( 'Content-type: application/vnd.ms-excel' );
header( 'Content-disposition: attachment;filename = liste-Visiteurs.xls' );

print $excel1;
print $excel;
exit;

?>