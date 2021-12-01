<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/presence.css">
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
    <main class="container">
        <?php
            if ($_GET["error"] == "none") {
                echo "<p style='color: green; padding: 10px 15px; font-weight: bold; text-align: center; font-size: 20px; margin-bottom: 0px;'>Enregistrement Réussi avec succès </p>";
            }
        ?>
        <h1 class="title">Traquet la présence</h1>
        <form action="backend/traquet.php" method="POST" id="register-form">
            <div class="form-content">
                <div class="form-left">
                    <div class="input-group">
                        <label for="name">Matricule :</label>
                        <input type="number" class="inputfield" name="Matricule" placeholder="Example: 16635" required>
                    </div>
                    <div class="input-group">
                        <label for="name">Heure et date d'entre :</label>
                        <input type="datetime-local" id="date-time" name="dateTime" class="inputfield"
                            name="time" required>
                        
                    </div>
                    <div class="input-group">
                        <label for="name">Durée :</label>
                        <input type="text" class="inputfield" name="time" maxlength= "6" placeholder="Example: 2h 0:0" required>
                    </div>
                </div>
                <div class="form-right">
                    <h3>Motif :</h3>
                    <div id="radio-btn">
                        <label for="Recherche" class="lable">
                            <input type="radio"  name="motif"  id="Recherche" class="radio_input" value="Recherche">
                            <div class="radio_Radio"></div>
                            Recherche
                        </label>
                        <label for="Formation" class="lable">
                            <input type="radio"  name="motif"  id="Formation" class="radio_input" value="Formation">
                            <div class="radio_Radio"></div>
                            Formation
                        </label>
                        <label for="Impression" class="lable">
                            <input type="radio" name="motif" id="Impression"  class="radio_input" value="Impretion">
                            <div class="radio_Radio"></div>
                            Impression
                        </label>
                        <label for="Photocopie" class="lable">
                            <input type="radio"  name="motif" id="Photocopie" class="radio_input" value="photocopie">
                            <div class="radio_Radio"></div>
                            Photocopie
                        </label>
                        <label for="courant" class="lable">
                            <input type="radio"  name="motif" id="courant" class="radio_input" value="Courant">
                            <div class="radio_Radio"></div>
                            courant
                        </label>
                        <label for="Stage" class="lable">
                            <input type="radio"  name="motif" id="Stage" class="radio_input" value="Stage">
                            <div class="radio_Radio"></div>
                            Stage
                        </label>
                    </div>
                </div>
            </div>
            <div class="input-group">
                <button name="submit" type="submit" id="btn">Traquet</button>
            </div>
            <div class="review">
                <p class="login-register-text">Pas encore enregistré ? ,<a href="studentRegister.php"> Enregistre la personnée</a></p>
            </div>
        </form>
    </main>
    <footer class="footer">
        <p> Copyright &#xa9;2021, Cimé Access.ulpgl.net</p>
    </footer>
</body>
</html>