<!DOCTYPE html>
<?php
    include 'backend/adminFunction.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel = "icon" href = "img/logo.png" type = "image/x-icon">
    <title>Cimé Access</title> 
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
        <div class="menu">
            <header class="menu_title">Menu</header>
            <ul>
                <li class="active"><i><img src="img/icon/analytics.svg" alt="icon"></i><a href="admin.php">Aperçu</a></li>
                <li><i><img src="img/icon/register.svg" alt="icon"></i><a href="studentRegister.php">Ajouter une personne</a></li>
                <li><i><img src="img/icon/traque.svg" alt="icon"></i><a href="traque.php">Traquer une personne</a></li>
                <li><i><img src="img/icon/folder.svg" alt="icon"></i><a href="reportTraque.php">Rapport</a></li>
                <li><i><img src="img/icon/settings.svg" alt="icon"></i><a href="parameter.php">Paramètre</a></li>
            </ul>
        </div>
        <section class="center_box">
            <h1 class="title">Aperçu</h1>
            <div class="box_container">
                <div class="stat_box">
                    <h5>Nombre d'étudiant enregistrés</h5>
                    <?php
                        
                        $output = EtudiantEnregistre();
                        echo '<h2> '.$output.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>Nombre d'étudiant traqués</h5>
                    <?php
                        $output1 = EtudiantTraque();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>Nombre des personnes Enregistrées</h5>
                    <?php
                        $output1 = VisiteurEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>FSTA</h5>
                    <?php
                        $output1 = FSTAEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>FSEG</h5>
                    <?php
                        $output1 = FSEGEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>Nombre des personnes Traquées</h5>
                    <?php
                        $output1 = VisiteurTraque();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>FSDC</h5>
                    <?php
                        $output1 = FSDCEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>FD</h5>
                    <?php
                        $output1 = FDEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>Nombre total d'heures</h5>
                    <?php
                        $output1 = NombreHeure();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>FPSE</h5>
                    <?php
                        $output1 = FPSEEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>FMED</h5>
                    <?php
                        $output1 = FMEDEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
                <div class="stat_box">
                    <h5>FT</h5>
                    <?php
                        $output1 = FTEnregistre();
                        echo '<h2> '.$output1.'</h2>';
                    ?>
                </div>
            </div>
        </section>
    </main>
    <!-- Main contents Wrapper-->
    <footer class="footer">
        <p> Copyright &#xa9;2021, Cimé Access.ulpgl.net</p>
    </footer>
</body>
</html>