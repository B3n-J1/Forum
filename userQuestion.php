<?php 
    require('actions/users/securityAction.php');
    require('actions/questions/userQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
    <?php include('includes/header.php'); ?>
    <body>
    <?php include('includes/navBar.php');?>

    <div class="container">
    <?php
        while ($question = $getUserQuestions->fetch()){
            ?>
            <div class="card  mt-3">
                <h5 class ="card-header">
                    <?php echo $question['title']; ?>
                </h5>
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $question['userMessage']; ?>
                    </p>
                    <a href="#" class="btn btn-primary">Allez à la question</a>
                    <a href="userModifyQuestion.php?id=<?php echo $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                </div>
            </div>

        <?php }; ?>
    </div>
    <?php 
    include('includes/footer.php');
?>
</body>
</html>