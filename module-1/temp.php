<?php 
// C/5 =F-32/9;
define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Temperature Value : ";
$temperature = (float)readline() ;
echo "Conver to (1:Farenheit, 2:Celcius) : ";
$choice = (int)readline();

switch($choice){
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo  "Temparature in Farenheit : $result\n";
        break;

    case 2:
        $result = ($temperature - OFFSET) / FACTOR ;
        echo "Temparature in Celcius : ";
        echo sprintf("%.2f", $result)."\n";
        break ;
        
    default:
    echo "Invalid Choice";
    break ;

    }