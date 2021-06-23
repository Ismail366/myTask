<?php
/*range function*/
function frange($start, $end){
    $num_array = range($start,$end);
    foreach($num_array as $num){
        echo $num."<br>";
    }
}
/*array sum function*/

function sum_array(...$numbers){
$sum=0;
    foreach ($numbers as $number){
        $sum=$sum+$number;
        
    }
    return $sum;   
}

frange(1,5);//first function call
echo "<br>";
echo sum_array(1,2,3,4);//second function call

?>
