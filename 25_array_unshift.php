<?php

$color = array(
    "a" => "red", 
    "b" => "green", 
    "c" => "yellow", 
    "d" => "purple"
);

print("<pre>");
print_r($color);
print("</pre>");

array_unshift($color, "blue");

print("<pre>");
print_r($color);
print("</pre>");

?>