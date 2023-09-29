<?php
function removeEvenNumbers($numbers) {
    $oddNumbers = array();

    foreach ($numbers as $number) {
        if ($number % 2 !== 0) {
            $oddNumbers[] = $number;
        }
    }
    print_r($oddNumbers);
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
removeEvenNumbers($numbers);
?>
