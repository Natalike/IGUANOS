<?php

$vinis = 85;
$smugiai = 0;

for($i = 0; $i < 5; $i++) {
    $liko = $vinis;
    do {
        $smugis = rand(5, 20);
        $liko = $smugis;
        #smugiai++;
    } while ($liko > 0);
    echo "<h1>Smugiu: $smugiai</h1>";

}
