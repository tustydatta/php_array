<?php

$color_one = array(
    "a" => "red", 
    "b" => "green",
    "c" => "blue", 
    "d" => "yellow"
);

print("<pre>");
print_r($color_one);
print("</pre>");

$result = array_shift($color_one);

print("<pre>");
print_r($color_one);
print("</pre>");


$color_two = array(
    "0" => "red", 
    "1" => "green",
    "2" => "blue", 
    "3" => "yellow"
);

print("<pre>");
print_r($color_two);
print("</pre>");

$result = array_shift($color_two);

print("<pre>");
print_r($color_two);
print("</pre>");

?>