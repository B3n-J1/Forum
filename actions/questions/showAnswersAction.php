<?php

require('actions/database.php');

$answersOfQuestion = $bdd->prepare('SELECT * FROM answers WHERE question_id = ? ORDER BY id DESC');
$answersOfQuestion->execute(array($questionId));