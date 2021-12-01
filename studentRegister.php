<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel = "icon" href = "img/logo.svg" type = "image/x-icon">
    <title>Cimé Access</title> 
</head>
<body class="container full-height-grow">
    <header class="main-header">
        <a href="/" class="logo">
            <img src="/img/logo.svg">
            <div class="logo-text"><i class="a">C</i>imé <i class="b">A</i>ccess</div>
        </a>
        <nav class="main-nav">
            <button><a href="index.html">Déconnexion</a></button>
        </nav>
    </header>
    <div class="box">
        <main class="container">
            <h1 class="title">Enregistrer la personnée</h1>
            <form action="backend/studentRegister.inc.php" method="POST" id="register-form">
                <div class="form-content">
                    <div class="form-left">
                        <div class="input-group">
                            <label for="name">Nom <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" autofocus name="name">
                        </div>
                        <div class="input-group">
                            <label for="name">Post Nom :</label>
                            <input type="text" class="inputfield" name="secondName">
                        </div>
                        <div class="input-group">
                            <label for="name">Prénon :</label>
                            <input type="text" class="inputfield" name="lastName">
                        </div>
                    </div>
                    <div class="form-right">
                        <div class="input-group">
                            <label for="name">Matricule :</label>
                            <input type="number" class="inputfield" name="matricule">
                        </div>
                        <div class="input-group">
                            <label for="name">Faculté :</label>
                            <input type="text" class="inputfield" name="faculte">
                        </div>
                        <div class="input-group">
                            <label for="name">Promotion :</label>
                            <input type="text" class="inputfield" name="promotion">
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <button name="submit" type="submit" id="btn">Enregistrer</button>
                </div>
                <div class="review">
                    <p class="login-register-text">Déjà Enregistré ? ,<a href="traque.php">Traquet la personnée</a></p>
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