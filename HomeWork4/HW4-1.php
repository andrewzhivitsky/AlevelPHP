<?php
$intArray = [2, 4, 7, 2, 77, 24, 55, 0, -5, 3];
function maxnum($arr) {
    $result = $arr[0];
    for ($i=0; $i < (count($arr)); $i++) { 
        if ($arr[$i] > $result) {
            $result = $arr[$i];
        } 
    }
    return $result;
}
echo maxnum($intArray);