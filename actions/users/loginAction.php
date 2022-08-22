<?php
session_start();
require('actions/database.php');

// Form validation
if(isset($_POST['validate'])){

    // Check input value null or not
    if(!empty($_POST['mail']) && !empty($_POST['password'])){

        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);

        $checkUser = $bdd->prepare('SELECT * FROM users WHERE mail = ?');
        $checkUser->execute(array($mail));

        if($checkUser->rowCount() > 0 ){

            $userInfo = $checkUser->fetch();
            if(password_verify($password, $userInfo['password'])){

                // Authentification user and put info on global var
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $userInfo['id'];
                $_SESSION['username'] = $userInfo['username'];
                $_SESSION['mail'] = $userInfo['mail'];

                header('Location: index.php');

            }else {
                $errorMessage = "Password incorrect ...";
            }

        }else{
            
            $errorMessage = "Mail incorrect ...";

            }
        
    }else{

        $errorMessage = "Veuillez remplir tout les champs";

    }

}