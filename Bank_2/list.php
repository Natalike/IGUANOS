<?php
require __DIR__ . '/bootstrap.php';
$title = 'Sąskaitų sąrašas';
require __DIR__ . '/top.php';
?>
<?php require __DIR__ . '/menu.php' ?>
<?php require __DIR__ . '/msg.php' ?>

<?php

$users = [];

if(file_exists(__DIR__.'/users.json')) {
    $users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);
}

$money = '0';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_GET['action'] == 'create') {
        $users[] = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'socialSecurityNumber' => $_POST['socialSecurityNumber'],
            'account' => $money,
            'id' => uniqid(),
        ];
    }


    file_put_contents(__DIR__ . '/users.json', json_encode($users));
    header('Location: http://localhost/PHP/Bank/U2/list.php/');
    die;
    
}
?>
<body>
    <ul>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <li>
                    <h2><?= $user['firstName'] ?></h2>
                    <h2><?= $user['lastName'] ?></h2>
                    <h2><?= $user['socialSecurityNumber'] ?></h2>
                    <h2><?= $user['bankNumber'] ?></h2>
                    <h2><?= $user['account'].'$' ?></h2>
                    <form action="<?= URL ?>destroy.php?id=<?= $user['id'] ?>" method="post">
                        <button type="submit" href="<?= URL ?>list.php">Ištrinti</button>
                    </form>
                </li>
            <?php endforeach ?>
        <?php else: ?>
            <li>
                No clients
            </li>
        <?php endif ?>
    </ul>
</body>
</html>

<?php