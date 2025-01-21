<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = json_decode($_POST['data']);
    echo ($a);
    // echo (json_encode(['test' => $a]));
}

// $pdo = new PDO('mysql:host=MySQL-8.0;dbname=cardfile;', 'root', '');

// $stateman = $pdo->query('SELECT name, surename, birthday, job FROM users');
// $users = $stateman->fetchAll(PDO::FETCH_ASSOC);

// var_dump($users);
?>