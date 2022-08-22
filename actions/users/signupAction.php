<?php 
session_start();
require('actions/database.php');

// Form validation
if(isset($_POST['validate'])){

    // Check input value null or not
    if(!empty($_POST['username']) && !empty($_POST['mail']) && !empty($_POST['password'])){

        $username = htmlspecialchars($_POST['username']);
        $mail = htmlspecialchars($_POST['mail']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Check mail && username doesn't exist
        $checkUsernameExist = $bdd->prepare('SELECT username FROM users WHERE username = ?');
        $checkUsernameExist->execute(array($username));
        $checkMailExist = $bdd->prepare('SELECT mail FROM users WHERE mail = ?');
        $checkMailExist->execute(array($mail));

        if($checkUsernameExist->rowCount() == 0 && $checkMailExist->rowCount() == 0 ){

            // Inset user on bdd
            $newUserInsert = $bdd->prepare('INSERT INTO users(username,mail,password) VALUES(?,?,?)');
            $newUserInsert->execute(array($username,$mail,$password));
            // Get user info 
            $getUserInfo = $bdd->prepare('SELECT id, username, mail FROM users WHERE username = ? AND mail = ?');
            $getUserInfo->execute(array($username, $mail));

            $userInfo = $getUserInfo->fetch();
            // Authentification user and put info on global var
            // $_SESSION['auth'] = true;
            // $_SESSION['id'] = $userInfo['id'];
            // $_SESSION['username'] = $userInfo['username'];
            // $_SESSION['mail'] = $userInfo['mail'];
            // Redirection 
            header('Location: index.php');

        }else if($checkUsernameExist->rowCount() > 0 && $checkMailExist->rowCount() == 0 ){

            $errorMessage = "Ce pseudo est déja pris ... Veuillez essayer un nouveau pseudo pour vous inscrire";

        }else if($checkUsernameExist->rowCount() == 0 && $checkMailExist->rowCount() > 0 ){

            $errorMessage = "Cet email est déja utilisé ... Veuillez changez d'email pour vous inscrire";
            
        }else{
            
            $errorMessage = "Les informations utilisés sont déja présentent dans nos données.";

        }

    }else{

        $errorMessage = "Veuillez remplir tout les champs";

    }

}