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
    $sql = "SELECT  `name`, 
                    `surename`, 
                    `birthday`, 
                    `id_birthplace`, 
                    `id_residence`, 
                    `id_gender`,
                    `job`,
                    `id_post`,
                    `phone_number`,
                    `id_religion`,
                    `id_marital_status` FROM `users`";
    $sth = $dbh->prepare($sql);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $keys = array_keys($result[0]);
    $str = '<div class="table__td">NN</div>';

    for ($i = 0; $i < count($keys); $i++) {
        if ($keys[$i] != 'surename') {
            $str = $str . '<div class="table__td">' . $keys[$i] . '</div>';
        }
    }

    for ($i = 0; $i < count($result); $i++) {
        $table_td = '<div class="table__td">' . $i + 1 . '</div>';
        $name = "";
        foreach ($result[$i] as $key1 => $value1) {
            if ($key1 == 'name') {
                $name = $value1;
            } else if ($key1 == 'surename') {
                $table_td = $table_td . '<div class="table__td">' . $name . ' ' . $value1 . '</div>';
            } else {
                $table_td = $table_td . '<div class="table__td">' . $value1 . '</div>';
            }
        }

        $table_tr = $table_tr . '<div class="table__tr">' . $table_td . '</div>';

    }

    $table_tr = '<div class="table__body" id="table-body">' . $table_tr . '</div>';
    $str = '<div class="table__thead">' . $str . '</div>' . $table_tr;



    echo ($str);
}
