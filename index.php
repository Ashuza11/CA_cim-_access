<?php 
    include_once '<backend/header.php'
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
    <section class="home-section">
        <div class="home-content">
            <h1 class="title">Gestion d'accès à la l'atélier informatique</h1>
            <button class="button" data-form-target="#form">Connexion</button>
        </div>
    </section>
    <div class="form" id="form">
        <form action="backend/login_inc.php" method="POST" id="login-form">
            <div data-colse-button class="close-btn">&times;</div>
            <div class="input-group">
                <label for="name">Email ou Non d'utilisateur :</label>
                <input type="text" class="inputfield" name="name">
            </div>
            <div class="input-group">
                <label for="pwd">Mot de passe :</label>
                <input type="password" class="inputfield" name="pwd">
            </div>
            <div class="input-group">
                <input id="btn" type="submit" value="Se connecter">
            </div>
        </form>
    </div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div id="overlay"></div>
    <script defer src="js/popup.js"></script>
</body>
</html>