<?php

function convertToBabySpeech(string $adultWords): string
{
    $toLowerCase = strtolower($adultWords);
    $babyWords = 'Baby says: ';

    for ($i = 0; $i < strlen($toLowerCase); $i++) {
    if ($toLowerCase[$i] === 'l' || $toLowerCase[$i] === 'r') {
        $babyWords .= 'w';
    } else {
        $babyWords .= $toLowerCase[$i];
    }
}
    $babyWords .= '. Buwaaaaaahhh';

    return $babyWords;
}