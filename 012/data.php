<?php

$niceAnimals = [
    ['name' => 'racoon', 'color' => 'skyblue'],
    ['name' => 'dog', 'color' => 'brown'],
];

$niceAnimals = json_encode($niceAnimals);

file_put_contents(__DIR__.'\animals.json', $niceAnimals);

echo 'animals.json created!';