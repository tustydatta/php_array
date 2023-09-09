<?php

$array_one = array(
    "a" => "red",
    "b" => "green",
    "c" => "black",
    "d" => "yellow"
);

$array_two = array(
    "a" => "red",
    "f" => "black",
    "d" => "puple"
);

$array_three = array(
    "a" => "red",
    "b" => "black",
    "d" => "blue"
);

$result = array_intersect($array_one, $array_two, $array_three);
$result1 = array_intersect_assoc($array_one, $array_two, $array_three);
$result2 = array_intersect_key($array_one, $array_two, $array_three);

print("<pre>");
print_r($result);
print_r($result1);
print_r($result2);
print("</pre>");

?>