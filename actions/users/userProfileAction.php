<?php 

require('actions/database.php');

if(isset($_GET['id']) && !empty($_GET['id'])){

    $user_id = $_GET['id'];

    $controlUserExist = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $controlUserExist->execute(array($user_id));

    if($controlUserExist->rowCount() > 0){

    $userInfo = $controlUserExist->fetch();
    $username = $userInfo['username'];
    $userMail = $userInfo['mail'];

    $userQuestion = $bdd->prepare('SELECT * FROM questions WHERE id_author = ?');
    $userQuestion->execute(array($user_id));

    }else{
        $errorMessage = 'Aucun utilisateur ne correspond !';
        
    }


}else{
    $errorMessage = 'Aucun utilisateur ne correspond !';
}