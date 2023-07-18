<?php

//file_put_contents('012.txt', 'Hello Big Brother!');

//echo __DIR__ . '<br>';

//$text = file_get_contents('012.txt'); // ('C:\xampp\htdocs\php\IGUANOS\012\012.txt') - pilnas kelias

$text = file_get_contents(__DIR__ . `\012.txt`);

echo "<h1>$text</h1>";