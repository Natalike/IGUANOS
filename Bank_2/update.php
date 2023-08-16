<?php
require __DIR__ . '/bootstrap.php';

if (!isset($_GET['id'])) {
    header('Location: ' . URL . 'list.php');
    die;
}


// $hex = $_POST['firstName'] ?? '';
// $name = $_POST['lastName'] ?? '';

// if ($hex == '' || $name == '') {
//     $_SESSION['message'] = [
//         'submit' => 'Please fill in all fields!',
//         'type' => 'crimson'
//     ];
//     $_SESSION['old_values'] = $_POST;
//     header('Location: ' . URL . 'add.php?id=' . $_GET['id'] . '');
//     die;
// }

// if (strlen($name) < 4) {
//     $_SESSION['message'] = [
//         'text' => 'Name must be at least 4 characters long!',
//         'type' => 'crimson'
//     ];
//     $_SESSION['old_values'] = $_POST;
//     header('Location: ' . URL . 'add.php?id=' . $_GET['id'] . '');
//     die;
// }

$money = $_POST['money'] ?? '';


$users = json_decode(file_get_contents(__DIR__ . '/users.json'), 1);

$find = false;
foreach ($users as $key => $c) {
    if ($c['id'] == $_GET['id']) {
        $find = true;
            $users[$key] = [
                'id' => $c['id'],
                'firstName' => $c['firstName'],
                'lastName' => $c['lastName'],
                'account' => $c['account'] + $money,
                'socialSecurityNumber' => $c['socialSecurityNumber'],
                'bankNumber' => $c['bankNumber']
            ];
        file_put_contents(__DIR__ . '/users.json', json_encode($users));
        break;
    }
}

$_SESSION['message'] = [
    'text' => $find ? 'Pinigai pridėti' : 'Color not found!',
    'type' => $find ? 'limegreen' : 'crimson'
];

header('Location: ' . URL . 'list.php');
die;