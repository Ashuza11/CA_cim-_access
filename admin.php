<!DOCTYPE html>
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
<body class="container full-height-grow">
    <header class="main-header">
        <a href="/" class="logo">
            <img src="img/logo.png">
            <div class="logo-text"><i class="a">C</i>imé <i class="b">A</i>ccess</div>
        </a>
        <nav class="main-nav">
            <button class="deconect"><a href="index.html">Déconnexion</a></button>
        </nav>
    </header>
    <section class="container">
        <h1 class="title">Admin Dashboard</h1>
        <div class="dash-board">
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
            <div class="traq">
                <img class="dash-icon" src="img/traq.png" alt="icon">
                <button><a href="traque.php">Traquet la présence</a></button>
            </div>
            <div class="register">
                <img class="dash-icon" src="img/register.png" alt="icon">
                <button><a href="studentRegister.php">Enregistrer l'étudiant</a></button>
            </div>
        </div>
    </section>
    <div class="footer">
        <p> Copyright &#xa9;2021, Cimé Access.ulpgl.net</p>
    </div>
</body>
</html>