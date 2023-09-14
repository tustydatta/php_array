<?php

$arr_one = array("red", "green");
$arr_two = array("blue", "yellow");
$result = array_merge($arr_one, $arr_two);

print("<pre>");
print_r($result);
print("</pre>");

$array_one = array(
    "a" => "red",
    "b" => "green"
);

$array_two = array(
    "c" => "blue",
    "b" => "yellow"
);

$ans = array_merge($array_one, $array_two);

print("<pre>");
print_r($ans);
print("</pre>");


?>