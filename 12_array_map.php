<?php

function myfunction($value){
    return($value * $value);
    // $result = $value + $value;
    // return($result);
}

$arr = array(1, 2, 3, 4, 5);
$r = array_map("myfunction", $arr);

print("<pre>");
print_r($r);
print("</pre>");


function testfunction($test){
    $v = strtoupper($test);
    return $v;
}

$array = array(
    "Animal" => "cow",
    "Type" => "mammal"
);

$ans = array_map("testfunction", $array);

print("<pre>");
print_r($ans);
print("</pre>");

?>