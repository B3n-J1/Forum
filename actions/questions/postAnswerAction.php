<?php

require('actions/database.php');

if(isset($_POST['validate'])){
    if (!empty($_POST['answer'])){
        $userAnswer = nl2br(htmlspecialchars($_POST['answer']));
        $post_date = date('l jS \of F Y h:i:s');

        $pushAnswer = $bdd->prepare('INSERT INTO answers(id_author, username_author, question_id, answer_content, post_date) VALUES(?,?,?,?,?)');
        $pushAnswer->execute(array($_SESSION['id'], $_SESSION['username'], $questionId, $userAnswer, $post_date));
    }
}