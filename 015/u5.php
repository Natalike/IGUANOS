<?php
echo '<pre>';
$az = range('A', 'Z');
$m3 = [];
foreach (range(1, 10) as $_) {
    $t = [];
    foreach (range(1,rand(2, 20)) as $_) {
        $t[] = $az[rand(0, 25)];
    }
    $m3[] = $t;
}
print_r($m3);

echo '<hr>';

usort($m3, function($a, $b) {
    return count($a) <=> count($b);
});

print_r($m3);