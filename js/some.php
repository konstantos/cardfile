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
    $sql = "SELECT  users.name,
                    users.surename,                    
                    genders.name_gender AS gender,
                    users.birthday,
                    cityes_birthplace.name_cityes AS birthplace,
                    marital_status.name_marital_status AS `marital status`,
                    religions.name_religion AS religion,                    
                    users.job,
                    posts.name_post AS post,
                    cityes_residence.name_cityes AS residence,
                    users.`phone number`
            FROM 
                users
            JOIN 
                genders AS genders ON users.gender = genders.id
            JOIN 
                cityes AS cityes_birthplace  ON users.birthplace = cityes_birthplace.id            
            JOIN 
                marital_status AS marital_status  ON users.`marital status` = marital_status.id
            JOIN 
                religions AS religions  ON users.religion = religions.id
            
            JOIN 
                posts AS posts  ON users.post = posts.id
            JOIN 
                cityes AS cityes_residence  ON users.residence = cityes_residence.id;
                ";

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

        $table_tr = $table_tr . '<div class="table__tr" data-modal="request">' . $table_td . '</div>';

    }

    $table_tr = '<div class="table__body" id="table-body">' . $table_tr . '</div>';
    $str = '<div class="table__thead">' . $str . '</div>' . $table_tr;



    echo ($str);
}
