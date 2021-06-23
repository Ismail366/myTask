<?php
/*range function*/
function frange($start, $end){
    $num_array = range($start,$end);
print_r($num_array);

}
/*array sum function*/

function sum_array(...$numbers){
$sum=0;
    foreach ($numbers as $number){
        $sum=$sum+$number;
        
    }
    return $sum;   
}

frange(1,2,3,4);
echo "<br>";
echo sum_array(1,2,3,4);

?>
