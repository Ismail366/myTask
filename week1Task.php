<?php
function range($start, $end){
    for($i=$start;$i<=$end;$i++){
        echo $i;
    }
}
function sum_array($numbers){
    $num_array = array($numbers);
    $sum = 0;
    for($i=0;$i<count($num_array); $i++){
        foreach($num_array as $number){
            $sum = $sum + $number;
        }
    }
    return $sum;
}
range(1,2,3,4);
echo "<br>";
echo sum_array(1,2,3,4);

?>
