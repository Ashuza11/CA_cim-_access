<?php 
    include_once 'layout/header.php'
?>
<body class="container full-height-grow">
    <header class="main-header">
        <a href="/" class="logo">
            <img src="img/logo.png" alt="icon">
            <div class="logo-text"><i class="a">C</i>imé <i class="b">A</i>ccess</div>
        </a>
    <nav class="main-nav">
        <button data-form-target="#form">Connexion</button>
    </nav>
    </header>
    <?php
            if (isset($_GET["error"])){
                if ($_GET["error"] == "emptyinput"){
                    echo '<p style="color: red; padding: 10px 15px; text-align: center; font-size: 18px;" >Viellez remplir tous les champs !</p>';
                }
                else if ($_GET["error"] == "Mauvaisidentifiant") {
                    echo "<p style='color: red; padding: 10px 15px; text-align: center; font-size: 18px;'>Nom incorrect !</p>";
                }
                else if ($_GET["error"] == "Mauvaispwd") {
                    echo "<p style='color: red; padding: 10px 15px; text-align: center; font-size: 18px;'>Mot de pass incorrect !</p>";
                }
            }
    ?>
    <section class="home-section">
        <div class="home-content">
            <h1 class="title">Gestion d'accès à l'atélier informatique</h1>
            <button class="button" data-form-target="#form">Connexion</button>
        </div>
        <div class="form" id="form">
        <form action="backend/login.php" method="POST" id="login-form">
            <div class="time-circle">
                <div data-colse-button class="close-btn">&times;</div>
            </div>
            <div class="input-group">
            <label for="name">Nom <span class="required">*</span> :</label>
                <input type="text" class="inputfield" autofocus name="name">
            </div>
            <div class="input-group">
                <label for="name">Mot de pass <span class="required">*</span> :</label>
                <input type="password" class="inputfield pwd" name="pwd">
            </div>
            <div class="input-group">
                <button name="submit" type="submit" id="btn">Se connecter</button>
            </div> 
            <div id="login-register-text">
                <p>Admn seulement ! <a href="admin.php">Admin</a></p>
            </div>
        </form>
    </section>
    
    </div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div id="overlay"></div>
    <script defer src="js/popup.js"></script>
</body>
</html>
