<?php

$num = array(10, 20, 30);
$result = array_sum($num);

echo "Total: ". $result ."<br>";

$num2 = array(
    "a" => 50, 
    "b" => 20, 
    "c" => 30
);
$ans = array_sum($num2);

echo "Total: ". $ans;

?>