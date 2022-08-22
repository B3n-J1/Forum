<?php
session_start();
require('actions/users/userProfileAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>
    <?php include('includes/navBar.php');?>
    <div class="container mt-5">
        <?php 
            if(isset($errorMessage)){
                echo '<p class="alert alert-danger" role="alert">'.$errorMessage.'</p>';
                }
            if(isset($userQuestion)){
                ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 style="text-align:center">@<?= $username; ?></h3>
                        </div>
                        <div style="text-align:center" class="card-body">
                            <?= $userMail; ?>
                        </div>
                    </div>
                    <h2 class="mt-4" style="text-align:center">Vos Questions </h2>
                <?php
                while ($question = $userQuestion->fetch()){;?>
                    <div class="card mt-3" style="margin-left: 15px">
                        <div class="card-header">
                        <a href="question.php?id=<?= $question['id']; ?>">
                            <?= $question['title']; ?>
                        </a>
                        </div>
                        <div class="card-body">
                            <?= $question['publish_date'];?>                          
                        </div>
                    </div>
                    <?php
                }
            }
        ?>
    </div>
    <?php 
    include('includes/footer.php');
?>
</body>

</html>