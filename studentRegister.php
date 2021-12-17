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
                <li class="active"><i><img src="img/icon/register.svg" alt="icon"></i><a href="#">Ajouter une personne</a></li>
                <li><i><img src="img/icon/traque.svg" alt="icon"></i><a href="#">Traquer une personne</a></li>
                <li><i><img src="img/icon/folder.svg" alt="icon"></i><a href="#">Rapport</a></li>
                <li><i><img src="img/icon/settings.svg" alt="icon"></i><a href="#">Paramètre</a></li>
            </ul>
        </div>
        <section class="center_box">
            <h1 class="title">Ajouter une personne</h1>
            <div class="container">
                <div class="form_container">
                    <form action="backend/studentRegister.inc.php" method="POST" class="form">
                        <h3>Etudiant</h3>
                        <div class="form-content">
                            <div class="form-left">
                                <div class="input-group">
                                    <label for="name">Nom <span class="required">*</span> :</label>
                                    <input type="text" placeholder="Entrer le nom complet" class="inputfield" autofocus name="name" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Matricule <span class="required">*</span> :</label>
                                    <input type="text" class="inputfield" name="matricule" placeholder="Example: 16635" pattern="[0-9]+" maxlength="5" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Téléphone <span class="required">*</span> :</label>
                                    <input type="tel" class="inputfield" placeholder="Entrer le numero de téléphone" name="" required>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class="input-group">
                                    <label for="name">Faculté <span class="required">*</span> :</label>
                                    <select name="" class="inputfield select-style">
                                        <option value="#">Sélectionner une option</option>
                                        <option value="FSTA">FSTA</option>
                                        <option value="FD">FD</option>
                                        <option value="FSEG">FSEG</option>
                                        <option value="FMED">FMED</option>
                                        <option value="FT">FT</option>
                                        <option value="FSDC">FSDC</option>
                                        <option value="FPSE">FPSE</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label for="name">Promotion <span class="required">*</span> :</label>
                                    <select name=""  class="inputfield">
                                        <option class="active" value="#">Sélectionner une option</option>
                                        <option value="g0">G0</option>
                                        <option value="g1">G1</option>
                                        <option value="g2">G2</option>
                                        <option value="g3">G3</option>
                                        <option value="tech1">Tech1</option>
                                        <option value="tech2">Tech2</option>
                                        <option value="l1">L1</option>
                                        <option value="l2">L2</option>
                                        <option value="back1">Back1</option>
                                        <option value="back2">Back2</option>
                                        <option value="back3">Back3</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <label for="name">Email <span class="required">*</span> :</label>
                                    <input type="email" class="inputfield" name="" placeholder="Entrer l'amail"  required>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button name="submit" type="submit" id="btn" data-table-target="#showStudent">Enregistrer</button>
                        </div>
                    </form>
                    <div class="table_result hide" id="showStudent">
                        <h3>Etudiants récemment enregistrés</h3>
                        <table class="table_reault">
                            <tr>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Faculté</th>
                                <th>Promotion</th>
                            </tr>
                            <tr>
                                <td>Alfreds Futterkiste</td>
                                <td>Maria Anders</td>
                                <td>Germany</td>
                                <td>Germany</td>
                            </tr>
                            <tr>
                                <td>Centro comercial Moctezuma</td>
                                <td>Francisco Chang</td>
                                <td>Mexico</td>
                                <td>Germany</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="form_container">
                    <form action="#" method="POST" class="form">
                        <h3>Visiteur</h3>
                        <div class="form-content add">
                            <div class="form-left">
                                <div class="input-group">
                                    <label for="name">Nom <span class="required">*</span> :</label>
                                    <input type="text" placeholder="Nom le nom complet" class="inputfield" name="name" autofocus  required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Téléphone <span class="required">*</span> :</label>
                                    <input type="tel" class="inputfield" placeholder="Entrer le numero de téléphone" name="" required>
                                </div>
                            </div>
                            <div class="form-right">
                                <div class="input-group">
                                    <label for="name">Email <span class="required">*</span> :</label>
                                    <input type="email" class="inputfield" name="" placeholder="Entrer l'amail"  required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Adresse <span class="required">*</span> :</label>
                                    <input type="text" class="inputfield" placeholder="Entrer l'adresse"  name="" required>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button name="submit" type="submit" id="btn" data-table-target="#show">Enregistrer</button>
                        </div>
                    </form>

                    <div class="table_result hide" id="show">
                        <h3>Visiteurs récemment enregistrés</h3>
                        <table class="table_reault">
                            <tr>
                                <th>Nom</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Adresse</th>
                            </tr>
                            <tr>
                                <td>Alfreds</td>
                                <td>Maria Anders</td>
                                <td>Germany</td>
                                <td>Germany</td>
                            </tr>
                            <tr>
                                <td>Centro comercial Moctezuma</td>
                                <td>Germany</td>
                                <td>Germany</td>
                                <td>Germany</td>
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