<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/parameter.css">
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
                <li><i><img src="img/icon/traque.svg" alt="icon"></i><a href="traque.php">Traquer une personne</a></li>
                <li><i><img src="img/icon/folder.svg" alt="icon"></i><a href="report.php">Rapport</a></li>
                <li class="active"><i><img src="img/icon/settings.svg" alt="icon"></i><a href="#">Paramètre</a></li>
            </ul>
        </div>
        <section class="center_box">
            <h1 class="title">Paramètre</h1>
            <div class="container">
                <div class="form_container">
                    <form action="backend/parametre.inc.php" method="POST" class="form">
                        <h3>Changer le mot de pass</h3>
                        <div class="form-content">
                            <div class="form-left">
                                <div class="input-group">
                                    <label for="name">Mot de pass <span class="required">*</span> :</label>
                                    <input type="password"  placeholder="Entrer l'ansien mot de pass" class="inputfield" autofocus name="name" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Mot de pass encore <span class="required">*</span> :</label>
                                    <input type="password" class="inputfield" name="matricule" placeholder="Entrer le Nouveau mot de pass" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Mot de pass encore <span class="required">*</span> :</label>
                                    <input type="password" class="inputfield" placeholder="Confirmer le mot de pass" name="" required>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button name="submit" type="submit" id="btn" data-table-target=".table_result">Envoyer</button>
                        </div>
                    </form>
                    <div class="form_container">
                    <form action="#" method="POST" class="form">
                        <h3>Ajouter un Administrateur</h3>
                        <div class="form-content">
                            <div class="form-left">
                                <div class="input-group">
                                    <label for="name">Nom <span class="required">*</span> :</label>
                                    <input type="text" placeholder="Nom le nom complet" class="inputfield" name="name" autofocus  required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Mot de pass <span class="required">*</span> :</label>
                                    <input type="password" class="inputfield" placeholder="Entrer le mot de pass" name="" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Mot de pass encore <span class="required">*</span> :</label>
                                    <input type="password" class="inputfield" placeholder="Confirmer le mot de pass" name="" required>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button name="submit" type="submit" id="btn" data-table-target="#show">Envoyer</button>
                        </div>
                    </form>
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