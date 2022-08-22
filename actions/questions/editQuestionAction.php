<?php 

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['title'] && !empty($_POST['userMessage']))){

        $modify_question_title = htmlspecialchars($_POST['title']);
        $modify_question_message = htmlspecialchars($_POST['userMessage']);

        $modifyQuestion =  $bdd->prepare('UPDATE questions SET title = ?, userMessage = ? WHERE id = ?');
        $modifyQuestion->execute(array($modify_question_title, $modify_question_message ,$questionID));

        header('Location: userQuestion.php');

    }else{
        $errorMessage = "Aucun champs ne peut être vide";
    }

}