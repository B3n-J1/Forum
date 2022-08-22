<?php 

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['title']) && !empty($_POST['userMessage'])){

        $title = htmlspecialchars($_POST['title']);
        $userMessage = nl2br(htmlspecialchars($_POST['userMessage']));
        $publish_date = date('d-m-Y');
        $id_author = $_SESSION['id'];
        $username_author = $_SESSION['username'];

        $insertQuestion = $bdd->prepare('INSERT INTO questions(title,userMessage,id_author,username_author,publish_date)VALUES(?,?,?,?,?)');
        $insertQuestion->execute(array($title,$userMessage,$id_author,$username_author,$publish_date));

        $sucessMessage = 'Votre question à bien été publiée !';

    }else {

        $errorMessage = 'Veuillez compléter tout les champs ';
    
    }
}