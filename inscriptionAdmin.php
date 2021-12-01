<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/adminRegister.css">
    <link rel = "icon" href = "img/logo.svg" type = "image/x-icon">
    <title>Cimé Access</title> 
</head>
<body>
    <div class="container">
        <form action="backend/register.inc.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">S'inscrire</p>
            <div class="input-group">
            <label for="name">Non :</label>
                <input type="text" placeholder="Entrer votre non" name="nom" class="inputfield" required>
            </div>
            <div class="input-group">
                <label for="name">Email :</label>
                <input type="email" placeholder="Entrer votre email" name="email" class="inputfield"  required>
            </div>
            <div class="input-group">
                <label for="name">Mot de pass:</label>
                <input type="password" placeholder="Entrer votre mot de pass" name="pwd" class="inputfield" required>
            </div>
            <div class="input-group">
                <label for="name">Mot de pass encore :</label>
                <input type="password" placeholder="Confirmer votrer mot de pass" name="cpwd" class="inputfield" required>
            </div>
            <div class="input-group">
                <button name="submit" id="btn">S'inscrire</button>
            </div>
            <p class="login-register-text">Vous avez de compte ? <a href="index.php">Connectez-vous ici</a></p>
        </form>
    </div>
</body>
</html>