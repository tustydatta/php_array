<?php

$color = array(
    "a" => "red", 
    "b" => "green", 
    "c" => "yellow", 
    "d" => "purple", 
    "f" => "green", 
    "i" => "red", 
    "g" => "purple", 
    "k" => "red",
    "l" => "blue",
    "m" => "skyblue"
);

$ans = array_unique($color);

print("<pre>");
print_r($ans);
print("</pre>");

?>