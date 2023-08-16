<?php
require __DIR__ . '/bootstrap.php';
$title = 'Nuskaičiuoti lėšas';
require __DIR__ . '/top.php';

if(file_exists(__DIR__.'/users.json')) {
    $users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);
}
?>
<?php require __DIR__ . '/menu.php' ?>


<body>
    <ul>
        <?php if (!empty($users)): ?>
            <?php foreach ($users as $user): ?>
                <li>
                    <h2><?= $user['firstName'] ?></h2>
                    <h2><?= $user['lastName'] ?></h2>
                    <h2><?= $user['socialSecurityNumber'] ?></h2>
                    <fieldset class="edit">
            <legend>Nuskaičiuoti lėšas</legend>
            <h2><?= $user['account'].'$' ?></h2>
                <form action="<?= URL ?>update2.php?id=<?= $user['id'] ?>" method="post">
                        <input type="text" name="remove">
                        <button type="submit">Nuskaičiuoti</button>
                </form>
            </fieldset>
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