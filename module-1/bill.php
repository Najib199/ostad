<?php

echo "Enter units consumed : ";
$units = (int)readline();

if($units<=100){
    $bill = $unit * 5;
} elseif($units <= 200){
    $bill = 100 * 5 + ($units - 100) * 10;
}else {
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
    
}
echo "Bill is $bill$ .\n";