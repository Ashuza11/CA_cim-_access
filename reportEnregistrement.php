<!DOCTYPE html>
<?php
    include_once 'backend/db.php';
    $token = null;
    $query= null;
    if(isset($_GET['search'])){
    $search = $_GET['search'];
    $table = $_GET['table'];
    $table =  $_GET['table'] == 'etudiant' ? 'register_student' : 'register_guest';
    $search = str_replace(" ","",$search);

    $query = "SELECT * FROM ". $table . " WHERE CONCAT ";
    if($table == 'register_student'){
        $field = " (studentName,studentEmail,matricule,telephone,faculty,promotion) ";
        $token = 1;
    }else{
        $field = " (guestName,guestEmail,telephone,Adresse) ";
        $token = 2;
    }
    $query = $query . $field . " LIKE '%$search%' ";
    }
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cimé Access</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/report.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
</head>

<body class="main-contents">
    <!-- Header Nav bar-->
    <header class="main-header">
        <a href="/" class="logo">
            <img src="img/logo.png">
            <div class="logo-text"><i class="a">C</i>imé <i class="b">A</i>ccess</div>
        </a>
        <nav class="main-nav">
            <button class="deconect menu"><a href="index.php">Déconnexion</a></button>
        </nav>
    </header>
    <!-- Header Nav bar End -->

    <!-- Main contents -->
    <main class="main">
        <!-- Menu -->
        <?php
            include_once 'layout/menu.php';
        ?>
        <!-- Menu wrapper -->
        <section class="center_box">
            <h1 class="title">Rapport Enregistrements</h1>
            <div class="contentContainer">
                <div class="content_header">
                    <form method='GET'>
                        <div class="search_bar">
                            <input type="text" class="search_txt" name="search" placeholder="Récherche">
                            <button type="submit" class="search_box"><i><img src="img/icon/search.svg" class="search"
                                        alt="icon"></i></button>
                        </div>
                        <div class="headerBotton">
                            <div class="btn1">
                                <img src="img/icon/filter.svg" alt="icon">
                                <select name='table'>
                                    <option value="#">Trier le recherche</option>
                                    <option value="etudiant">Etudiant</option>
                                    <option value="visiteur">Visiteur</option>
                                </select>
                            </div>
                    </form>
                    <div class="right_header_btn">
                        <button name="actualise" class="btn1" type="report.php">Actualiser</button>
                        <div class="btn1">
                            <img src="img/icon/export.svg" class="icon" alt="icon">
                            <a href="backend/exporterSaveStudent.php">
                                <button name="export" type="button">Exporter le fichier</button></a>
                        </div>
                    </div>
                </div>
                <div class="main_content">
                    <div class="table">
                        <h3 class="table_title">Etudiants</h3>
                        <table class="table_data">
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>telephone</th>
                                <th>Matricule</th>
                                <th>Faculté</th>
                                <th>Promotion</th>
                            </tr>
                            <?php
                                    
                                    if($token != 1){
                                        $query2 = "SELECT * FROM `register_student` ORDER BY studentId ";
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

                                <td> <?php echo  $id ;?> </td>
                                <td> <?php echo $items1 ['studentName']  ;?> </td>
                                <td> <?php echo $items1 ['telephone'] ; ?> </td>
                                <td> <?php echo $items1 ['matricule'] ;?> </td>
                                <td> <?php echo $items1 ['faculty']  ;?> </td>
                                <td> <?php echo $items1 ['promotion']  ;?> </td>
                            </tr>

                            <?php
                                    }
                                }
                                ?>

                        </table>
                    </div>
                    <div class="table">
                        <h3 class="table_title">Visiteurs</h3>
                        <table class="table_data">
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>email</th>
                                <th>telephone</th>
                                <th>adresse</th>
                            </tr>
                            <?php 

                                        if($token != 2){
                                            $query1 = "SELECT * FROM `register_guest` ORDER BY guestId ";
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
                                <td> <?php echo  $id;?> </td>
                                <td> <?php echo $items1 ['guestName']  ;?> </td>
                                <td> <?php echo $items1 ['guestEmail']  ;?> </td>
                                <td> <?php echo $items1 ['telephone']  ;?> </td>
                                <td> <?php echo $items1 ['Adresse'] ; ?> </td>
                            </tr>

                            <?php
                                        }
                                    }

                                    ?>
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <?php
        include_once 'layout/footer.php';
    ?>
    <!-- Footer -->
</body>

</html>