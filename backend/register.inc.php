<?php

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["cpwd"];

        # Gerer les errers qui peuvent arriver en utilisants les fonctions 
        # Du fichier register_fonction.php
        require_once 'db.php';
        require_once 'function.php';

        # Backside validation 
        # 1. Verifier si les formilaire a etait bien remplit

        // if (invalidAdminName($name) !== false) {
        //     header("location: ../register.php?error=invaliduid");
        //     exit();
        // }
        // if (invalidEmail($email) !== false) {
        //     header("location: ../register.php?error=invalidemail");
        //     exit();
        // }

        // Handle erros 
        // $errors = array($name=>'', $pwd=>'');
        
        # Fonctione  
        if (PwdMatch($pwd, $pwdRepeat) !== false) {
            $errors[$name] = 
            header("location: ../parameter.php?error=passworddontmatch");
            exit();
        }
        # Verifier si le nom existe dans la base des données
        if (AdminExists($conn,  $name) !== false) {
            header("location: ../parameter.php?error=ussenametaken");
            exit();
        }

        # Tous est bon Enregistre l'utilisateur en utilisant la fonction Createuser
        creatAdmin($conn, $name, $pwd);
        }
        else {
            header("location: ../parameter.php");
            exit();
    }