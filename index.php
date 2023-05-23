<?php

$array = [1,2,3,4];
$result = [];

if (isAscendingOrder($array)) {
    echo "The array order is  Ascending.";
} else {
    do {
        for ($i = 0; $i < count($array) - 1; $i++) {
            if ($array[$i] < $array[$i + 1]) {
                $temp = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $temp;
                array_push($result, $array);
            }
        }
    } while (! isAscendingOrder($array));
    print_r($result);
}

function isAscendingOrder($array)
{
    for ($i = (count($array)-1); $i>=0;$i--)
     {
        if($i < (count($array)-1)){
            if($array[$i-1] >$array[$i]){
                return true ;
            }
        }
      
    }
    return false;
}


