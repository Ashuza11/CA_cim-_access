<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/report.css">
    <link rel = "icon" href = "img/logo.png" type = "image/x-icon">
    <link >
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
                <li><i><img src="img/icon/analytics.svg" alt="icon"></i><a href="admin.php">Aperçu</a></li>
                <li><i><img src="img/icon/register.svg" alt="icon"></i><a href="studentRegister.php">Ajouter une personne</a></li>
                <li><i><img src="img/icon/traque.svg" alt="icon"></i><a href="traque.php">Traquer une personne</a></li>
                <li class="active"><i><img src="img/icon/folder.svg" alt="icon"></i><a href="#">Rapport</a></li>
                <li><i><img src="img/icon/settings.svg" alt="icon"></i><a href="parameter.php">Paramètre</a></li>
            </ul>
        </div>
        <section class="center_box">
            <h1 class="title">Rapport</h1>
            <div class="contentContainer">
                <div class="content_header">
                    <div class="search_bar">
                        <input type="text" class="search_txt" name="search" placeholder="Récherche">
                        <button type="submit" class="search_box"><i><img src="img/icon/search.svg" class="search" alt="icon"></i></button>
                    </div>
                    <div class="headerBotton">
                        <div class="btn1">
                            <img src="img/icon/filter.svg" alt="icon">
                            <select name="">
                                <option value="#">Trier le recherche</option>
                                <option value="student">Etudiant</option>
                                <option value="visitor">Visiteur</option>
                            </select>
                        </div>
                        <button name="actualise" class="btn1" type="#">Actualiser</button>
                        <div class="btn1">
                            <img src="img/icon/export.svg" class="icon" alt="icon">
                            <button name="export" type="#" >Exporter le fichier</button>
                        </div>
                    </div>
                </div>
                <div class="main_content">
                    <div class="table">
                        <h3>Etudiants</h3>
                        <table class="table_data">
                            <tr>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Faculté</th>
                                <th>Promotion</th>
                                <th>Date</th>
                                <th>Durée</th>
                                <th>Motif</th>
                            </tr>
                            <tr>
                                <td>Alse</td>
                                <td>124535</td>
                                <td>FSTA</td>
                                <td>G2</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>60</td>
                                <td>Formation</td>
                            </tr>
                            <tr>
                                <td>Ben</td>
                                <td>124535</td>
                                <td>FSTA</td>
                                <td>G2</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>45</td>
                                <td>Cours</td>
                            </tr>
                            <tr>
                                <td>Jomo</td>
                                <td>124535</td>
                                <td>FSTA</td>
                                <td>G2</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>30</td>
                                <td>Cours</td>
                            </tr>
                            <tr>
                                <td>Crispin</td>
                                <td>124535</td>
                                <td>FSTA</td>
                                <td>G2</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>90</td>
                                <td>Cours</td>
                            </tr>
                        </table>
                    </div>
                    <div class="table">
                        <h3>Visiteurs</h3>
                        <table class="table_data">
                            <tr>
                                <th>Nom</th>
                                <th>Télephone</th>
                                <th>Date</th>
                                <th>Durée</th>
                                <th>Email</th>
                                <th>Motif</th>
                            </tr>
                            <tr>
                                <td>Jems</td>
                                <td>+243970353087</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>60</td>
                                <td>jems@gmail.com</td>
                                <td>Formation</td>
                            </tr>
                            <tr>
                                <td>Jems</td>
                                <td>+243970353087</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>60</td>
                                <td>jems@gmail.com</td>
                                <td>Formation</td>
                            </tr>
                            <tr>
                                <td>Jems</td>
                                <td>+243970353087</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>60</td>
                                <td>jems@gmail.com</td>
                                <td>Formation</td>
                            </tr>
                            <tr>
                                <td>Jems</td>
                                <td>+243970353087</td>
                                <td>2021-12-14 13:28:13</td>
                                <td>60</td>
                                <td>jems@gmail.com</td>
                                <td>Formation</td>
                            </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main contents Wrapper-->
    <footer class="footer">
        <p> Copyright &#xa9;2021, Cimé Access.ulpgl.net</p>
    </footer>
    <script defer src="js/table.js"></script>
</body>
</html>