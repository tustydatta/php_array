<?php

$arr = array("red", "green");
$result = array_pad($arr, 10, "blue");

print("<pre>");
print_r($result);
print("</pre>");

$ans = array_pad($arr, -5, "blue");

print("<pre>");
print_r($ans);
print("</pre>");

?>