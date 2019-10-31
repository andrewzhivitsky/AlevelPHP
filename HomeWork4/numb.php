<?php
function numToSymb($fileName) {
    $sumbolArray = file($fileName);
    array_map('numb', $sumbolArray);
    return true;
}
function numb($line) {
    $array = array(
        "zero" => 0,
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "four" => 4,
        "five" => 5,
        "six" => 6,
        "seven" => 7,
        "eight" => 8,
        "nine" => 9
    );
    $result = "";
    $sumbolArr = explode(";", trim($line));
    foreach ($sumbolArr as $i) {
        $result = "$result" . "$array[$i]";
    }
    echo "$result \n";
    return $result;
}
numToSymb("numToSymb.txt");