<?php
$dbh = new PDO(
    "mysql:host=MySQL-8.0;dbname=cardfile;charset=UTF8",
    'root',
    ''
);


$result;
$str = '';
$table_tr = "";
$table_td = "";
if ($_POST['action'] == 1) {
    $sql = "SELECT `name`, `birthday`, `phone_number` FROM `users`";
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $keys = array_keys($result[0]);

    foreach ($keys as $key => $value) {
        $str = $str . '<div class="table__td">' . $value . '</div>';
    }

    foreach ($result as $key => $value) {
        foreach ($value as $key1 => $value1) {
            $table_td = $table_td . '<div class="table__td">' . $value1 . '</div>';
        }
        $table_tr = $table_tr . '<div class="table__tr">' . $table_td . '</div>';
        $table_td = '';
    }

    $table_tr = '<div class="table__body" id="table-body">' . $table_tr . '</div>';
    $str = '<div class="table__thead">' . $str . '</div>' . $table_tr;



    echo ($str);
}
