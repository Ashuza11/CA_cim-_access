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
<body class="full-height-grow">
    <header class="main-header">
        <a href="/" class="logo">
            <img src="img/logo.png">
            <div class="logo-text"><i class="a">C</i>imé <i class="b">A</i>ccess</div>
        </a>
        <nav class="main-nav">
            <button><a href="admin.php">Dashboard</a></button>
        </nav>
    </header>
    <div class="box">
        <h1 class="title">Enregistrer de la personnée</h1>
        <main class="container">
            <div class="tools">
                <h2>Outils</h2>
                <div class="fonc">
                    <img src="img/file.png" alt="icon">
                    <button class="btn blue"><a href="#">inporté les étudiant</a></button>
                </div>
                <div class="fonc">
                    <img class="red" src="img/Vector.png" alt="icon">
                    <button class="btn"><a href="#">Rapport</a></button>
                </div>
                <div class="fonc">
                    <img src="img/locker 1.png" alt="icon">
                    <button class="btn blue"><a href="#">Changer le mot de pass</a></button>
                </div>
            </div>
            <form action="backend/studentRegister.inc.php" method="POST" id="register-form">
            <div class="errors">
                <?php
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "studentNametaken"){
                            echo '<p style="color: red; padding: 20px; text-align: center; font-size: 18px;" >Nom ou matricule déjà enregistre !</p>';
                        }
                    }
                ?>
                </div>
                <div class="form-content">
                    <div class="form-left">
                        <div class="input-group">
                            <label for="name">Nom <span class="required">*</span> :</label>
                            <input type="text" placeholder="Nom de la personne" class="inputfield" autofocus name="name" required>
                        </div>
                        <div class="input-group">
                            <label for="name">Post Nom <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" placeholder="Post nom de la personne" name="secondName" required>
                        </div>
                        <div class="input-group">
                            <label for="name">Prénon <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" placeholder="Prénom de la personne" name="lastName" required>
                        </div>
                    </div>
                    <div class="form-right">
                        <div class="input-group">
                            <label for="name">Matricule <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" name="matricule" placeholder="Example: 16635" pattern="[0-9]+" maxlength="5" required>
                        </div>
                        <div class="input-group">
                            <label for="name">Faculté <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" placeholder="Example: FSTA" maxlength="10" name="faculte" required>
                        </div>
                        <div class="input-group">
                            <label for="name">Promotion <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" name="promotion" placeholder="Example: G2" maxlength="5" required>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <button name="submit" type="submit" id="btn">Enregistrer</button>
                </div>
                <div class="review">
                    <p class="login-register-text">Déjà Enregistré ?, <a href="traque.php">Traquet la personnée</a></p>
                </div>
            </form>
        </main>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div id="overlay"></div>
        <footer class="footer">
            <p> Copyright &#xa9;2021, Cimé Access.ulpgl.net</p>
        </footer>
    </div>
</body>
</html>