<?php
require __DIR__ . '/bootstrap.php';
require __DIR__.'/generator.php';
$title = 'Naujos sąskaitos sukūrimas';
require __DIR__ . '/top.php';
?>
<?php require __DIR__ . '/menu.php' ?>
<?php

$users = [];

if(file_exists(__DIR__.'/users.json')) {
    $users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_GET['action'] == 'create') {
        $users[] = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'socialSecurityNumber' => randomSc(),
            'bankNumber' => 'LT'.randomBank(),
            'account' => 0,
            'id' => uniqid(),
        ];
    }


    file_put_contents(__DIR__ . '/users.json', json_encode($users));
    header('Location: http://localhost/PHP/Bank/U2/list.php/');
    die;
    
}
?>


<legend>Add Account</legend>
        <form action="http://localhost/PHP/Bank/U2/create.php?action=create" method="post">
            <input type="text" name="firstName" placeholder="First Name"  minlength="3" maxlength="20">
            <input type="text" name="lastName" placeholder="Last Name"  minlength="3" maxlength="20">
            <button type="submit">Pridėti</button>
        </form>
</fieldset>

<?php