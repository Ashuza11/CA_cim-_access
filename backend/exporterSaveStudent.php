<?php
try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=cime_access;charset=utf8', 'root', '' );
} catch ( Exception $e ) {
    die( 'Erreur : ' . $e->getMessage() );
}
$select = $bdd->prepare( 'SELECT *FROM register_student' );
$select->setFetchMode( PDO::FETCH_ASSOC );
$select->execute();
$newReservations = $select->fetchAll();
$excel1 =  "\r LISTE DES ETUDIANTS ENREGISTRES DANS LE SYSTEME \n\n";
$excel = " ";
$excel .= " NUM \t NOM \t EMAIL \t TELEPHONE \t MATRICULE \t FACULTE \t PROMOTION \n";
$id=0;
foreach ( $newReservations as $row ) {
    $id++;
    $excel .= "$id\t$row[studentName]\t$row[studentEmail]\t$row[telephone]\t$row[matricule]\t$row[faculty]\t$row[promotion]\n";
}

header( 'Content-type: application/vnd.ms-excel' );
header( 'Content-disposition: attachment;filename = liste-Etudiants.xls' );

print $excel1;
print $excel;
exit;

?>