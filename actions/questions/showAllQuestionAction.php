<?php 

require('actions/database.php');

$getLastQuestion = $bdd->query('SELECT * FROM questions ORDER BY id DESC LIMIT 0,5 ');

if(isset($_GET['search']) && !empty($_GET['search'])){

    $userSearch = $_GET['search'];

    $getLastQuestion = $bdd->query('SELECT * FROM questions WHERE title LIKE "%'.$userSearch.'%" ORDER BY id DESC ');

}