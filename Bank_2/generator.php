<?php

        
    $pirmas = 3;
    $antras = rand(50, 99);
    $trecias = 0;
    $ketvirtas = rand(1, 12);
    $penktas = rand(1, 30);
    $sestas = rand(0, 100);
    $septintas = rand(1, 9);

    function randomSc () {
        $pirmas = 3;
        $antras = rand(50, 99);
        $trecias = 0;
        $ketvirtas = rand(1, 12);
        $penktas = rand(1, 30);
        $sestas = rand(0, 100);
        $septintas = rand(1, 9);

        $kodas = [$pirmas];
        array_push($kodas, $antras);
        if($ketvirtas < 10) {
            array_push($kodas, $trecias, $ketvirtas);
        } elseif ($ketvirtas[0] >= 10)  {
            array_push($kodas, $ketvirtas);
        }
        if($penktas < 10) {
            array_push($kodas, $trecias, $penktas);
        } elseif ($penktas >= 10) {
            array_push($kodas, $penktas);
        }
        if($sestas < 10) {
            array_push($kodas, $trecias, $trecias, $sestas);
        } elseif ($sestas >= 10) {
            array_push($kodas, $trecias, $sestas);
        }
        array_push($kodas, $septintas);
        
        return $string = implode($kodas);
    }

randomSc();


function randomBank() {

    $kotrolinis = rand(10, 99);
    
    $penkiu = rand(10000,99999);
    
    $galas = rand(11111111111, 99999999999);

    $bankas = [$kotrolinis];
    array_push($bankas, $penkiu, $galas);
    
    return $saskaita = implode($bankas);
}

randomBank();