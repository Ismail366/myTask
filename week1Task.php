<?php
function range($start, $end){
    for($i=$start,$i<=$end,$i++){
        echo $i;
    }
}
function sum_array($numbers){
    $num_array = array($numbers);
    $sum = 0;
    for($i=0,$i<count($num_array) $i++){
        foreach($num_array as $number){
            $sum = $sum + $number;
        }
    }
    return $sum
}


?>
