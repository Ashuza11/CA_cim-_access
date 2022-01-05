
<?php
 
//  if ( isset( $_POST['submit'] ) ) {
 
//      $pwd = $_POST['current_password'];
//      $Npwd = $_POST['new_password'];
//      $CNpwd = $_POST['new_password_retype'];
 
//      # Data base file
//      require_once 'db.php';
//      # Functions file
//      require_once 'function.php';
//      $pwdHashed = $adminExixts["adminPwd"];
//      $checkPwd = password_verify($pwd, $pwdHashed);
//      if ($checkPwd === false) {
//         header("location: ../parameter.php?error=MauvaisPassword");
//         exit();
//     }
//     else if ($checkPwd === true){ 
//         if ($Npwd!== $CNpwd) {

//             header("location: ../parameter.php?error=NewPass#ConfNewPass");
//         exit();
//         } else {

//$requete="select * from admin_table where adminId=$iduser and adminPwd=MD5('$pwd') ";
// 
//             $sql="UPDATE admin_table SET adminPwd = $Npwd WHERE ;";
//             $stmt = mysqli_stmt_init($conn); # Initialise an new prepared statement
//             # Check if it doesn't fail
//              # Hashing the Password to make it unreaderble dusing built in fuction password_hash
//             $hashedPwd = password_hash($Npwd, PASSWORD_DEFAULT);
//             # if everything is ok 
//             mysqli_stmt_bind_param($stmt, "s",$hashedPwd);
//             mysqli_stmt_execute($stmt);
//             # Grabe thr data 
//             $resultData = mysqli_stmt_get_result($stmt);
//             mysqli_stmt_close($stmt);
//             # Direct the user to the home page after signing him up
//             header("location: ../parameter.php?error=none");
//             exit();
                
//         }
//       }
       
// session
session_start();
    
    // if(!isset($_SESSION['adminNom'])) {
    //     header('location:index.php');
    //     exit();
    // }
//connexion db
    try {

        $pdo = new PDO( 'mysql:host=localhost;dbname=cime_access',
        'root', '' );
    
    } catch ( Exception $e ) {
        die( 'Erreur : ' . $e->getMessage() );
    
        //die( 'Erreur : impossible de se connecter à la base de donnée' );
    }
// code


$iduser=$_SESSION['adminNom']['adminId'];

$oldpwd=isset($_POST['current_password'])?$_POST['current_password']:"";

$newpwd=isset($_POST['new_password'])?$_POST['new_password']:"";

$requete="select * from admin_table where adminId=$iduser and adminPwd=MD5('$oldpwd') ";

$resultat=$pdo->prepare($requete);

$resultat->execute();

if($resultat->fetch()) {
    $requete = "update admin_table set adminPwd=MD5(?) where adminId=?";
    $params = array($new_password, $iduser);
    $resultat = $pdo->prepare($requete);
    $resultat->execute($params);

    // "<div class='alert alert-success' >
    //            <strong>Félicitation!</strong> Votre mot de passe est modifié avec succés
    //        </div>";
    header('location:../parameter.php');

}else{
    // $msg="<div class='alert alert-danger' >
    //         <strong>Erreur!</strong> L'ancien mot de passe est incorrect !!!!
    //        </div>";
    header('location:../admin.php');
}
       

    
       ?>
