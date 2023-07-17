<?php
echo '<pre>';

$spintele = [
    5 =>'bebras',
    true => 'vilkas',
    'lape',
    'pieva' => 'zuikis',
    'barsukas',
    'vovere',
    'suo',
    33 => 'kate',
    'narvas' =>'peleda',
    'sernas',
];

$spintele[20] = 'papuga';

//array_push($spintele, 'varna');
$spintele[] = 'varna';

//array_pop($spintele);
//array_shift($spintele);

print_r($spintele);

echo '<br>';


//foreach ($spintele as $key => $value) {
//    echo "$key ---> <br>";
//}


//pakeis zuiki i triusi
//foreach ($spintele as $key => $value) {
//    if ($value == 'zuikis') {
//        $spintele[$key] = "triusis";
//    }
//}

foreach ($spintele as $key => $value) {}

unset($value);

foreach ($spintele as $key => $value) {}

//for ($i = 1; $i <= 5; $i++) {
//    echo $i;
//}

//foreach (range(1, 5) as $value) {
//    echo $value;

//}

echo '<br>';



print_r($spintele);

//masyvo rusiavimas

usort($spintele, function($a, $b) {
    return $a <=> $b;
});

print_r($spintele);

//$spintele[4];


