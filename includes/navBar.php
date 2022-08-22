<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php 
          if (isset($_SESSION['auth'])){ ?>
            <li class="nav-item">
              <a class="nav-link" href="publish-question.php">Nouvelle question</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="userQuestion.php">Mes questions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profilUser.php?id=<?= $_SESSION['id'] ;?>">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="actions/users/logout.php">Deconnexion</a>
            </li>
            <?php }else{
               ?>
                  <li class="nav-item text-right">
                    <a class="nav-link" href="login.php">Se connecter</a>
                  </li>
            <?php 
          }
        ?>
      </ul>
    </div>
  </div>
</nav>