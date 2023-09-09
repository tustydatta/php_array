<?php

$array_one = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue"
);

$array_two = array(
    "c" => "red",
    "d" => "black",
    "e" => "brown"
);

$array_three = array(
    "f" => "green",
    "c" => "purple",
    "g" => "red"
);

$differ = array_diff_key($array_one, $array_two);

print("<pre>");
print_r($differ);
print("</pre>");

?>