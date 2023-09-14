<?php

$arr = array("red", "green", "blue");
array_pop($arr);

print("<pre>");
print_r($arr);
print("</pre>");

array_push($arr, "yellow", "skyblue");

print("<pre>");
print_r($arr);
print("</pre>");

$arr2 = array("a" => "red", "b" => "green", "c" => "blue");

array_push($arr2, "yellow", "skyblue");

print("<pre>");
print_r($arr2);
print("</pre>");

?>