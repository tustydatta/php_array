<?php

$color_one = array("red", "Green");
$color_two = array("blue", "yellow");
$color_three = array("orange", "skyblue");

$result = array_replace($color_one, $color_two, $color_three);

print("<pre>");
print_r($result);
print("</pre>");

$one = array("a" => "red", "b" => "green");
$two = array("a" => "blue", "yellow");

$ans = array_replace($one, $two);

print("<pre>");
print_r($ans);
print("</pre>");

?>