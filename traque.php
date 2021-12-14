<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/presence.css">
    <link rel="stylesheet" href="css/succesMassage.css">
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
    <!-- <div class="success_massage">Enregistrement réuissi avec succès</div> -->
    <main class="container">
        <h1 class="title">Traquet la présence</h1>
        <div class="box-contente">
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
            <form action="backend/traquet.php" method="POST" id="register-form">
                <div class="errors_massege">
                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == "EtudiantIntrouve"){
                                echo '<p style="color: red; padding: 10px 15px; text-align: center; font-size: 18px;" >Etudiant non enregistrer !</p>';
                            }
                        }
                    ?>
                </div>
                <div class="form-content">
                    <div class="form-left">
                        <div class="input-group">
                            <label for="name">Matricule <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" autofocus name="Matricule" placeholder="Example: 16635" pattern="[0-9]+" maxlength="5" required>
                        </div>
                        <div class="input-group">
                            <label for="name">Heure et date d'entre <span class="required">*</span> :</label>
                            <input type="datetime-local" id="date-time"  name="dateTime" class="inputfield"
                                name="time" required>
                            
                        </div>
                        <div class="input-group">
                            <label for="name">Durée <span class="required">*</span> :</label>
                            <input type="text" class="inputfield" name="time" placeholder="Example: 2h:30 ou 1h" maxlength="4" required>
                        </div>
                    </div>
                    <div class="form-right">
                        <h3>Motif <span class="required">*</span> :</h3>
                        <div id="radio-btn">
                            <label for="Recherche" class="lable">
                                <input type="radio"  name="motif"  id="Recherche" class="radio_input" value="Recherche" required>
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
        </div>
    </main>
    <footer class="footer">
        <p> Copyright &#xa9;2021, Cimé Access.ulpgl.net</p>
    </footer>
    <!-- <script defer src="js/success.js"></script> -->
</body>
</html>