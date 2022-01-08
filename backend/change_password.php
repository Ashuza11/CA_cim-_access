<?php
// Démarrage de la session 
session_start();try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=cime_access;charset=utf8', 'root', '' );
} catch ( Exception $e ) {
    die( 'Erreur : ' . $e->getMessage() );
}
// Si la session n'existe pas 
if(!isset($_SESSION['adminId']) &&($_SESSION['adminName']))
{
    header('Location:../Index.php');
    die();
}


// Si les variables existent 
if(!empty($_POST["current_password"]) && !empty($_POST['new_password']) && !empty($_POST['new_password_retype'])){
    // XSS 
    $current_password = htmlspecialchars($_POST["current_password"]);
    $new_password = htmlspecialchars($_POST['new_password']);
    $new_password_retype = htmlspecialchars($_POST['new_password_retype']);
    $name=$_POST['nameAdmin'];

    // On récupère les infos de l'utilisateur
    $check_password  = $bdd->prepare("SELECT adminPwd FROM admin_table WHERE adminName = :adminName;");
    $check_password->execute(array(
        "adminName" => $_SESSION['adminName']
    ));
    $data_password = $check_password->fetch();

    // Si le mot de passe est le bon
    // if(password_verify($current_password, $data_password['adminPwd']))
    // {
        // Si le mot de passe tapé est bon
        if($new_password === $new_password_retype){

            // On chiffre le mot de passe
            $new_password = password_hash($new_password,  PASSWORD_BCRYPT);
            // On met à jour la table utiisateurs
            $update = $bdd->prepare('UPDATE admin_table SET adminPwd= :adminPwd WHERE adminName = :adminName');
            $update->execute(array(
                "adminPwd" => $new_password,
                "adminName" => $_SESSION['adminName']
            ));
            // On redirige
            header('Location: ../parameter.php?err=success_password');
            die();
         }
        // }
    // else{
    //     header('L}ocation: ../parameter.php?err=current_password');
    //     die();
    // }
}
else{
    header('Location: ../parameter.php');
    // header( 'location: ../index.php' );
    die();
}