<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function removeEvenNumbers($arr)
{
    $result = array();

    foreach ($arr as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }

    return $result;
}

$filteredNumbers = removeEvenNumbers($numbers);
print_r($filteredNumbers);