<?php 

require('actions/database.php');

$getUserQuestions = $bdd->prepare('SELECT id, title, userMessage FROM questions WHERE id_author = ? ORDER BY id DESC ');
$getUserQuestions->execute(array($_SESSION['id']));
