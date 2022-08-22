<?php 
    require('actions/users/securityAction.php');
    require('actions/questions/getInfoQuestionToModify.php');
    require('actions/questions/editQuestionAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>
    <?php include('includes/navBar.php'); ?>

<div class="container mt-5">
    <?php 

        if (isset($errorMessage)){
            echo '<p class="alert alert-danger" role="alert">'.$errorMessage.'</p>';
        } 

        if(isset($questionDate)){ ?>
    
            <form method="POST">

                <div class="mb-3">
                    <label  class="form-label">Entête </label>
                    <input type="text" class="form-control" name="title" value="<?= $questionTitle ?>">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contenu </label>
                    <textarea class="form-control" name="userMessage"><?= $questionMessage ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary" name="validate">Modifier</button>
                
            </form>

        <?php }; ?>

</div>
<?php 
    include('includes/footer.php');
?>
</body>
</html>