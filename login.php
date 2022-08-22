<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>

<?php include('includes/navBar.php'); ?>

<form class="container mt-5" method="POST">

<?php 

    if (isset($errorMessage)){
        echo '<p class="alert alert-danger" role="alert">'.$errorMessage.'</p>';
    }

?>
    <div class="mb-3">
        <label  class="form-label">Email </label>
        <input type="email" class="form-control" name="mail">
    </div>
    <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="validate">Se Connecter</button>
    <div class="mt-3">
        <a href="signup.php"><p>Inscrivez vous ici</p></a>
    </div>
</form>
<?php 
    include('includes/footer.php');
?>
</body>
</html>