<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/parameter.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
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
        <!-- Menu -->
        <?php
            include_once 'layout/menu.php';
        ?>
        <!-- Menu wrapper -->
        <section class="center_box">
            <h1 class="title">Paramètre</h1>
            <div class="container">
                <div class="form_container">

                    <?php
      session_start();
      if(isset($_SESSION['adminId']) AND isset($_SESSION['adminName']))
      {
      ?>
                    <form action="backend/change_password.php" method="POST" class="form">
                        <h3>Changer le mot de pass</h3>
                        <div class="form-content">
                            <div class="form-left">
                                <div class="input-group">
                                    <label for="name">Nom <span class="required">*</span> :</label>
                                    <input type="name" placeholder="Entrer votre nom" class="inputfield" autofocus
                                        name="nameAdmin" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Ancien Mot de pass <span class="required">*</span> :</label>
                                    <input type="password" placeholder="Entrer l'ansien mot de pass" class="inputfield"
                                        autofocus name="current_password" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Nouveau Mot de pass <span class="required">*</span> :</label>
                                    <input type="password" class="inputfield" name="new_password"
                                        placeholder="Entrer le Nouveau mot de pass" required>
                                </div>
                                <div class="input-group">
                                    <label for="name">Confirmer Mot de pass <span class="required">*</span> :</label>
                                    <input type="password" class="inputfield" placeholder="Confirmer le mot de pass"
                                        name="new_password_retype" required>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button name="submit" type="submit" id="btn"
                                data-table-target=".table_result">Envoyer</button>
                        </div>
                    </form>
                    <?php
     }
     ?>
                    <?php
                    if(isset($_GET["error"])) {
                        if ($_GET["error"] == "ussenametaken"){
                            echo '<p style="color: red; padding: 10px 15px; text-align: center; font-size: 18px;" >Nom déjà Enregistrer !</p>';
                        }
                        else if ($_GET["error"] == "passworddontmatch") {
                            echo "<p style='color: red; padding: 10px 15px; text-align: center; font-size: 18px; margin-bottom: 0px;'>Mot de passe incorrect !</p>";
                        }
                    }
                ?>
                    <div class="form_container">
                        <form action="backend/register.inc.php" method="POST" class="form">
                            <h3>Ajouter un Administrateur</h3>
                            <div class="form-content">
                                <div class="form-left">
                                    <div class="input-group">
                                        <label for="name">Nom <span class="required">*</span> :</label>
                                        <input type="text" placeholder="Nom le nom complet" class="inputfield"
                                            name="nom" autofocus required>
                                    </div>
                                    <div class="input-group">
                                        <label for="name">Email <span class="required">*</span> :</label>
                                        <input type="email" class="inputfield" placeholder="Entrer votre email "
                                            name="email" required>
                                    </div>
                                    <div class="input-group">
                                        <label for="name">Mot de pass <span class="required">*</span> :</label>
                                        <input type="password" class="inputfield" placeholder="Entrer mot de passe"
                                            name="pwd" required>
                                    </div>
                                    <div class="input-group">
                                        <label for="name">Mot de pass encore <span class="required">*</span> :</label>
                                        <input type="password" class="inputfield" placeholder="Confirmer le mot de pass"
                                            name="cpwd" required>
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
    <!-- Footer -->
    <?php
        include_once 'layout/footer.php';
    ?>
    <!-- Footer -->
</body>

</html>