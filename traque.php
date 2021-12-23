<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/register.css">
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
                <li><i><img src="img/icon/analytics.svg" alt="icon"></i><a href="admin.php">Aperçu</a></li>
                <li><i><img src="img/icon/register.svg" alt="icon"></i><a href="studentRegister.php">Ajouter une personne</a></li>
                <li class="active"><i><img src="img/icon/traque.svg" alt="icon"></i><a href="#">Traquer une personne</a></li>
                <li><i><img src="img/icon/folder.svg" alt="icon"></i><a href="report.php">Rapport</a></li>
                <li><i><img src="img/icon/settings.svg" alt="icon"></i><a href="parameter.php">Paramètre</a></li>
            </ul>
        </div>
        <section class="center_box">
            <h1 class="title">Traquer une personne</h1>
            <div class="container">
                <div class="form_container">
                    <form action="#" method="POST" class="form">
                        <h3>Etudiant</h3>
                        <div class="form-content  add">
                            <div class="form-left">
                                <div class="input-group">
                                    <label for="name">Matricule <span class="required">*</span> :</label>
                                    <input type="text" class="inputfield" name="matricule" placeholder="Example: 16635" pattern="[0-9]+" maxlength="5" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Motif <span class="required">*</span> :</label>
                                    <select name="" class="inputfield select-style">
                                        <option value="#">Sélectionner une option</option>
                                        <option value="Recherche">Recherche</option>
                                        <option value="Formation"> Formation</option>
                                        <option value="Cours">Cours</option>
                                        <option value="Cours">Conférence</option>
                                        <option value="Impression">Impression et saisie</option>
                                        <option value="5">courant</option>
                                        <option value="6">Stage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class="input-group">
                                    <label for="name">Durée <span class="required">*</span> :</label>
                                    <input type="text" class="inputfield" name="" placeholder="Entrer la durée en munites"  required>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button name="submit" type="submit" id="btn" data-table-target="#showStudent">Traquer</button>
                        </div>
                    </form>
                    <div class="table_result hide" id="showStudent">
                        <h3>Etudiants récemment traqués</h3>
                        <table class="table_reault">
                            <tr>
                                <th>Matricule</th>
                                <th>Durée</th>
                                <th>Promotion</th>
                            </tr>
                            <tr>
                                <td>15846</td>
                                <td>60</td>
                                <td>Motif</td>
                            </tr>
                            <tr>
                                <td>15446</td>
                                <td>30</td>
                                <td>Motif</td>
                            </tr>
                            <tr>
                                <td>15446</td>
                                <td>30</td>
                                <td>Motif</td>
                            </tr>
                            <tr>
                                <td>15446</td>
                                <td>30</td>
                                <td>Motif</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="form_container">
                    <form action="b" method="POST" class="form">
                        <h3>Visiteur</h3>
                        <div class="form-content add">
                            <div class="form-left">
                                <div class="input-group">
                                    <label for="name">Téléphone <span class="required">*</span> :</label>
                                    <input type="tel" class="inputfield" placeholder="Entrer le numero de téléphone" name="" required>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class="input-group">
                                    <label for="name">Durée <span class="required">*</span> :</label>
                                    <input type="text" class="inputfield" name="" placeholder="Entrer la durée en munites"  required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Motif <span class="required">*</span> :</label>
                                    <select name="" class="inputfield select-style">
                                        <option value="#">Sélectionner une option</option>
                                        <option value="Recherche">Recherche</option>
                                        <option value="Formation"> Formation</option>
                                        <option value="Cours">Entretien</option>
                                        <option value="Impression">Conférence</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button name="submit" type="submit" id="btn" data-table-target="#show">Traquer</button>
                        </div>
                    </form>

                    <div class="table_result hide" id="show">
                        <h3>Visiteurs récemment traqués</h3>
                        <table class="table_reault">
                            <tr>
                                <th>Téléphone</th>
                                <th>Durée</th>
                                <th>Motif</th>
                            </tr>
                            <tr>
                                <td>0970475609</td>
                                <td>50</td>
                                <td>Entretien</td>
                            </tr>
                            <tr>
                                <td>0978346575</td>
                                <td>50</td>
                                <td>Conférence</td>
                            </tr>
                            <tr>
                                <td>0978346575</td>
                                <td>60</td>
                                <td>Conférence</td>
                            </tr>
                            <tr>
                                <td>0978346575</td>
                                <td>50</td>
                                <td>Conférence</td>
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