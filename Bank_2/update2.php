<?php
require __DIR__ . '/bootstrap.php';

$users = json_decode(file_get_contents(__DIR__ . '/users.json'), 1);
$change = $_POST['remove'] ?? '';

if (!isset($_GET['id'])) {
    header('Location: ' . URL . 'list.php');
    die;
}

foreach ($users as $key => $d) {
    if ($d['id'] == $_GET['id']) {
        $amount = $d['account'];
        break;
    }
}   


$newBalance = intval($amount) - intval($change);
if ($newBalance < 0) {
    echo 'Negali buti minusine banko suma';
}
else {
    $find = false;
    foreach ($users as $key => $c) {
        if ($c['id'] == $_GET['id']) {
            $find = true;
                $users[$key] = [
                    'id' => $c['id'],
                    'firstName' => $c['firstName'],
                    'lastName' => $c['lastName'],
                    'account' => $newBalance,
                    'socialSecurityNumber' => $c['socialSecurityNumber'],
                    'bankNumber' => $c['bankNumber']
                ];
            file_put_contents(__DIR__ . '/users.json', json_encode($users));
            break;
        }
    }
}

$_SESSION['message'] = [
    'text' => $find ? 'Pinigai nuimti' : 'Ivyko klaida!',
    'type' => $find ? 'limegreen' : 'crimson'
];
header('Location: ' . URL . 'list.php');
die;