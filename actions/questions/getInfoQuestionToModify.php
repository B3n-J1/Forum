<?php 

require('actions/database.php');

if(isset($_GET['id']) && !empty($_GET['id'])){

        $questionID = $_GET['id'];

        $checkQuestionExist = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
        $checkQuestionExist->execute(array($questionID));

        if($checkQuestionExist->rowCount() > 0){

            $questionInfos = $checkQuestionExist->fetch();
            if($questionInfos['id_author'] == $_SESSION['id']){

                $questionTitle = $questionInfos['title'];
                $questionMessage = $questionInfos['userMessage'];
                $questionDate = $questionInfos['publish_date'];
                
                $questionMessage = str_replace('<br />','',$questionMessage);

            }else {
                $errorMessage =  "Vous ne pouvez pas modifier cette question car vous n'êtes pas l'auteur de cet question ...";
            }

        }else {
            
            $errorMessage =  "Aucune question n'a étét trouvé ...";
        }


}else {
    $errorMessage =  "Aucune question n'a étét trouvé ...";
}