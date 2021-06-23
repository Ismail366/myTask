<?php
function Range($start, $end){
    $num_array = range($start,$end);
print_r($num_array);

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
