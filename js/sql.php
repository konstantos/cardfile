<?php


$dbh = new PDO(
    "mysql:host=MySQL-8.0;dbname=cardfile;charset=UTF8",
    'root',
    ''
);

if ($_POST['action'] == 1) {
    echo ('подключено');
    $sql = "SELECT `name` FROM `users`";
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result);
    echo ($result);
}

// $pdo = new PDO('mysql:host=MySQL-8.0;dbname=cardfile;', 'root', '');

// $stateman = $pdo->query('SELECT name, surename, birthday, job FROM users');
// $users = $stateman->fetchAll(PDO::FETCH_ASSOC);

// var_dump($a);
?>