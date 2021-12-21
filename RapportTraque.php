<h1> Rapport  </h1>
<!-- actualisation de la page -->

<a href="RapportTraque.php">Actualiser</a>
<br>

<a href="admin.php">Retour</a>
<br>

<a href="#">Exporter le fichier</a>
<br>

<!-- debut des code php pour la recherche-->

<form method = 'GET' class="form">
            <input type = 'text' required name = 'search' >
            <select name='table'>
                <option value="etudiant">Etudiant</option>
                <option value="visiteur">Visiteur</option>
            </select>
            <button type = 'submit'>Search</button>
</form>
<?php
    include_once 'backend/db.php';
    $token = null;
    $query= null;
  if(isset($_GET['search'])){
    $search = $_GET['search'];
    $table = $_GET['table'];
    $table =  $_GET['table'] == 'etudiant' ? 'register_student,traque_student' : 'register_guest,traque_guest';
    $search = str_replace(" ","",$search);

    $query = "SELECT * FROM ". $table . " WHERE CONCAT ";
    if($table == 'register_student,traque_student'){
        $field = " (studentName,studentEmail,matricule,telephone,faculty,promotion,motif,duration,dateandTime) ";
        $token = 1;
    }else{
        $field = " (guestName,guestEmail,telephone,Adresse,motif,duration,dateandTime) ";
        $token = 2;
    }
    $query = $query . $field . " LIKE '%$search%' ";
   }
?>

<!--  tableau des visiteurs traqués -->
<table>
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>email</th>
                        <th>telephone</th>
                        <th>adresse</th>
                        <th>motif</th>
                        <th>duree</th>
                        <th>date et heure</th>
                    </tr>
                </thead>
                <tbody>
              
<?php 

    if($token != 2){
        $query1 = "SELECT * FROM `register_guest`INNER JOIN `traque_guest` ON idEtranger = guestId ";
        $query_run1= mysqli_query( $conn, $query1);
    }elseif($token == 2) {
        $query_run1= mysqli_query( $conn, $query);
    } 
   if(mysqli_num_rows($query_run1)>0){
       $id=0;
    foreach($query_run1 as $items1){
        $id++;
 ?>
        <tr>
        <td> <?php echo $id ;?> </td>
    <td> <?php echo $items1 ['guestName']  ;?> </td>
    <td> <?php echo $items1 ['guestEmail']  ;?> </td>
    <td> <?php echo $items1 ['telephone']  ;?> </td>
    <td> <?php echo $items1 ['Adresse'] ; ?> </td>
    <td> <?php echo $items1 ['motif'] ; ?> </td>
    <td> <?php echo $items1 ['duration'] ; ?> </td>
    <td> <?php echo $items1 ['dateandTime'] ; ?> </td>
</tr>

<?php
    }
 }

 ?>
</tbody>

<!-- tableaux des Etudiants traqués -->
</table>

<table>
                <thead>
                    <h1>ETUDIANTS</h1>
                    <tr>
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>telephone</th>
                        <th>Matricule</th>
                        <th>Faculté</th>
                        <th>Promotion</th>
                        <th>motif</th>
                        <th>duree</th>
                        <th>date et temps </th>
                    </tr>
                </thead>
                <tbody>
<?php
    
    if($token != 1){
        $query2 = "SELECT * FROM `register_student`INNER JOIN `traque_student` ON idEtudiant = studentId ";
        $query_run2= mysqli_query( $conn,$query2);
    }elseif($token == 1) {
        $query_run2= mysqli_query( $conn, $query);
    } 
if(mysqli_num_rows($query_run2)>0){
    $id=0;
    foreach($query_run2 as $items1){
        $id++;
 ?>
        <tr>
        <td> <?php echo $id  ;?> </td>     
    <td> <?php echo $items1 ['studentName']  ;?> </td>
    <td> <?php echo $items1 ['studentEmail']  ;?> </td>
    <td> <?php echo $items1 ['telephone'] ; ?> </td>
    <td> <?php echo $items1 ['matricule'] ;?> </td>
    <td> <?php echo $items1 ['faculty']  ;?> </td>
    <td> <?php echo $items1 ['promotion']  ;?> </td>
    <td> <?php echo $items1 ['motif']  ;?> </td>
    <td> <?php echo $items1 ['duration']  ;?> </td>
    <td> <?php echo $items1 ['dateandTime']  ;?> </td>
</tr>

<?php
    }
 }
 ?>
</tbody>
</table>

