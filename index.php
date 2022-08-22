<?php 
session_start();
require('actions/questions/showAllQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>
<?php include('includes/navBar.php'); ?>

<div class="container mt-5">
    <form method="GET">
        <div class="form-group row">
            <div class="col-8">
                <input type="search" name="search" class="form-control">
            </div>
            <div class="col-4">
                <button class="btn btn-success">Rechercher</button>
            </div>
        </div>
    </form>

    <?php 
        while($showQuestion = $getLastQuestion->fetch()){ 
            ?>
                <div class="card mt-3">
                    <div class="card-header">
                        <a href="question.php?id=<?= $showQuestion['id']; ?>">
                            <?= $showQuestion['title']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <?= $showQuestion['userMessage']; ?>
                    </div>
                    <div class="card-footer">
                        Publié par <a href="profilUser.php?id=<?= $showQuestion['id_author']; ?>"><?= $showQuestion['username_author']; ?></a> le <?= $showQuestion['publish_date']; ?> 

                    </div>
                </div>
            <?php
        }
    ?>

</div>
<?php 
    include('includes/footer.php');
?>
</body>
</html>