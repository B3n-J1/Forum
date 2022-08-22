<?php 
require('actions/database.php');

if(isset($_GET['id']) && !empty($_GET['id'])){

    $questionId = $_GET['id'];
    $checkQuestionExist = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkQuestionExist->execute(array($questionId));

    if($checkQuestionExist->rowCount()  > 0){

        $questionInfo = $checkQuestionExist->fetch();
        $questionTitle = $questionInfo['title'];
        $questionMessage = $questionInfo['userMessage'];
        $questionAuthorID = $questionInfo['id_author'];
        $questionAuthor = $questionInfo['username_author'];
        $questionDate = $questionInfo['publish_date'];

    }else {
        $errorMessage = 'Aucune question ne correspond';
    }

}else {
    $errorMessage = 'Aucune question ne correspond';
}