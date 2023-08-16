<?php
$users = json_decode(file_get_contents(__DIR__ . '/users.json'), 1);
if (!isset($_GET['id'])) {
    header('Location: ' . URL . 'list.php');
    die;
}
$find = false;
foreach ($users as $key => $c) {
    if ($c['id'] == $_GET['id']) {
        if($c['account'] > 0) {
            echo 'Negalima istrinti kol saskaitoje yra pinigu';
        } else {
            $find = true;
            unset($users[$key]);
            file_put_contents(__DIR__ . '/users.json', json_encode($users));
            break;
        }
    }
}