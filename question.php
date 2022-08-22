<?php
session_start();
require('actions/questions/showQuestionContentAction.php'); 
require('actions/questions/postAnswerAction.php');
require('actions/questions/showAnswersAction.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include('includes/header.php'); ?>
    <body>
    <?php include('includes/navBar.php'); ?>
    <div class="container">
        <?php 
        
        if(isset($errorMessage)){ echo '<p class="alert alert-danger" role="alert">'.$errorMessage.'</p>'; }
            if(isset($questionDate)){
                ?>
                <section class="show-content mt-5">
                    <h3><?= $questionTitle; ?></h3>
                    <p><?= $questionMessage; ?></p>
                    <small>De <?= $questionAuthor . ' le ' . $questionDate; ?></small>
                </section>
                <section class="show-answers mt-3">
                    <form class="form-group" method="POST">
                        <div class="mb-3"></div>
                        <label class="form-label">Repondre :</label>
                        <textarea name="answer" class="form-control" ></textarea>
                        <button name="validate" class="btn btn-primary mt-3" type="submit">Repondre</button>
                    </form>
                    <?php   
                        while($answer = $answersOfQuestion->fetch()){
                            ?>
                            <div class="card mt-3" style="margin-left: 15px;">
                                <div class="card-header">
                                    <small>
                                        Par <a href="profilUser.php?id=<?= $answer['id_author'].'">'.$answer['username_author'];?></a>
                                        le <?= $answer['post_date'];?>
                                    </small> 
                                </div>
                                <div class="card-body">
                                    <?= $answer['answer_content'];?>
                                </div>
                            </div>
                            <?php
                        }                    
                    ?>
                </section>
                <?php 
            }
        ?>
    </div>
    <?php 
    include('includes/footer.php');
?>
</body>
</html>