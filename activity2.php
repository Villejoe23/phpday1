<?php


function add_all ($array) {

    $sum= 0;
    foreach($array as $total) {
    $sum += ($total);
    }
    return $sum;
}
$total = array(2,4,6,8,10,12,14);
$totalAmount = add_all ($total);
echo $totalAmount;

// add_all();
// function add_all() 
// {
// $numbers = array (2,4,6,8,10,12);
// echo "The sum is"  ."<br>" . array_sum ($numbers);
// }



?>
