<?php 
    require('actions/users/securityAction.php'); 
    require('actions/questions/publishQuestionAction.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/header.php'); ?>
<body>
<?php include('includes/navBar.php'); ?>

<form class="container mt-5" method="POST">

<?php 

    if (isset($errorMessage)){
        echo '<p class="alert alert-danger" role="alert">'.$errorMessage.'</p>';
    } else if (isset($sucessMessage)) {
        
        echo '<p class="alert alert-success " role="alert">'.$sucessMessage.'</p>';
    }

?>

    <div class="mb-3">
        <label  class="form-label">Entête </label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="mb-3">
        <label  class="form-label">Contenu </label>
        <textarea class="form-control" name="userMessage"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary" name="validate">Poster</button>
    
</form>
<?php 
    include('includes/footer.php');
?>
</body>
</html>