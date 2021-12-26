<?php
# User Name checker
function invalidAdminName($name) {
    $result;
    # User of the search algorithm
    if (!preg_match("/^[a-zA-Z]*$/", $name)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
# Passwoed checker 
function PwdMatch($pwd, $pwdRepeat) {
    $result;
    if ($pwd !== $pwdRepeat){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}
# Cheker si l'utilisateur existe déjà dans la base. 
# Ussed for the sign up for and for the login form 
function AdminExists($conn,  $name) {
    $sql = "SELECT * FROM admin_table WHERE adminNom = ?;"; # Close of sql statmnt and php statmnt
    # unitialise a new statemment/ prevenir l'utilisateur de questionner la base via le fomulaire 
    $stmt = mysqli_stmt_init($conn); # stmt statement to execuite
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../parameter.php?error=stmtfailed");
        exit();
    }
    # if everything is ok / Pass data for user
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);

    # Grabe the data  from the data base
    $resultData = mysqli_stmt_get_result($stmt);

    # Faching the data as an associative array
    # Grab the data with username
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row; # return all the data if the user exist in the data base 
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function creatAdmin($conn, $name,  $pwd){
    $sql = "INSERT INTO admin_table (adminNom,  adminPwd) VALUES ( ?, ?);"; # Close 
    $stmt = mysqli_stmt_init($conn); # Initialise an new prepared statement
    # Check if it doesn't fail
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=usenametaken");
        exit();
    }
    # Hashing the Password to make it unreaderble using built in fuction password_hash
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    # if everything is ok 
    mysqli_stmt_bind_param($stmt, "ss", $name,  $hashedPwd);
    mysqli_stmt_execute($stmt);
    # Grabe thr data 
    $resultData = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);
    # Direct the user to the home page after signing him up
    header("location: ../index.php?error=none");
    exit();
}


# Login Section 

# Check imptyinput  For  login 
function emptyInputLogin($name, $pwd) {
    $result;
    if (empty($name) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function loginAdmin($conn, $name, $pwd) {
    $adminExixts = AdminExists($conn,  $name);
    if ($adminExixts ===  false){
        header("location: ../index.php?error=Mauvaisidentifiant");
        exit();
    }

    # Check for password if exist
    $pwdHashed = $adminExixts["adminPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../index.php?error=Mauvaispwd");
        exit();
    }
    else if ($checkPwd === true)
    {
        # Usage of sessions using a session fuction built in php
        session_start();
        $_SESSION["adminId"] = $adminExixts["adminId"];
        $_SESSION["adminNom"] = $adminExixts["adminNom"];
        header("location: ../admin.php");
        exit();
    }
}

# Register Student 

# Check if student exixte 
function studentExists($conn, $matricule) {
    $sql = "SELECT * FROM register_student WHERE  matricule = ?";
    $stmt = mysqli_stmt_init($conn); # stmt statement to execuite
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../studentRegister.php?error=stmtfailed");
        exit();
    }
    # if everything is ok / Pass data for user
    mysqli_stmt_bind_param($stmt,"s",$matricule);
    mysqli_stmt_execute($stmt);

    # Grabe the data  from the data base
    $resultData = mysqli_stmt_get_result($stmt);

    # Faching the data as an associative array
    # Grab the data with username
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row; # return all the data if the user exist in the data base 
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
# Lok for wheter the user provide infos 
function emptystudentInfo($name, $email, $tel, $matricule,  $faculte, $promotion) {
    $result;
    if (empty($name) || empty($email)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

# Register the student 
function  registerStudent($conn, $name, $email, $tel, $matricule, $faculte, $promotion) {
    $sql = "INSERT INTO register_student (studentName,studentEmail,telephone,matricule,faculty,promotion) VALUES (?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn); # Initialise an new prepared statement
    # Check if it doesn't fail
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../studentRegister.php?error=connexionFailed");
    }
    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $tel, $matricule, $faculte, $promotion);
    mysqli_stmt_execute($stmt);
    # Grabe thr data 

    mysqli_stmt_close($stmt);

    # Direct the user to the home page after signing him up
    header("location: ../studentRegister.php?error=none");
    exit();
}


# Register visiteur 

# Check if guest exixte 
function visiteurExists($conn, $email, $tel) {
    $sql = "SELECT * FROM register_guest WHERE telephone = ?;";

    $stmt = mysqli_stmt_init($conn); # stmt statement to execuite
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../studentRegister.php?error=stmtfailed");
        exit();
    }
    # if everything is ok / Pass data for user
    mysqli_stmt_bind_param($stmt, "ss", $email, $tel);
    mysqli_stmt_execute($stmt);

    # Grabe the data  from the data base
    $resultData = mysqli_stmt_get_result($stmt);

    # Faching the data as an associative array
    # Grab the data with username
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row; # return all the data if the user exist in the data base 
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
# Lok for wheter the user provide infos 
function emptyvisiteurInfo($name, $email, $tel, $adresse) {
    $result;
    if (empty($name) || empty($tel)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

# Register the guest
function  registervisiteur($conn, $name, $email, $tel, $adresse) {
    $sql = "INSERT INTO register_guest (guestName,guestEmail,telephone,adresse) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn); # Initialise an new prepared statement
    # Check if it doesn't fail
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../studentRegister.php?error=connexionFailed");
    }
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $tel, $adresse);
    mysqli_stmt_execute($stmt);
    # Grabe thr data 

    mysqli_stmt_close($stmt);

    # Direct the user to the home page after signing him up
    header("location: ../studentRegister.php?error=none");

    
    exit();
}
?>