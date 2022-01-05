
<?php
    try {
            $bdd = new PDO("mysql:host=localhost;dbname=cime_access;charset=utf8", "root", "");
        }
    catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
        }
    session_start();
        $pwd=$_POST['current_password'];
        $pwdHashed = $adminExixts["adminPwd"];
        $checkPwd = password_verify($pwd, $pwdHashed);
    if ($checkPwd === false) {
        header("location: ../parameter.php?error=MauvaisPassword");
        exit();
    }else {
        if ($_POST['new_password']==$_POST['new_password_retype'])
        {
            $pass_hache=sha1($_POST['adminPwd']);
            $req = $bdd->prepare('UPDATE admin_table SET adminPwd=? WHERE adminName = ?');
            $req->execute(array(
            $pass_hache,
            $_SESSION['adminName']
        ));
            echo '<p>La modification de mot de passe a été prise en compte ! Déconnectez-vous et reconnectez-vous afin de valider ce changement.</p><br/>';
        }
        else{
            echo'Vous n\'avez pas tapé deux fois le même mot de passe';
        }
            
    }
 
?>