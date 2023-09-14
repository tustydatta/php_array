<?php

$arr_one = array("Dog", "Cat", "Horse");
$arr_two = array("Lion", "Tiger", "Bear");

array_multisort($arr_one, $arr_two);

print("<pre>");
print_r($arr_one);
print("</pre>");

print("<pre>");
print_r($arr_two);
print("</pre>");

array_multisort($arr_one,SORT_DESC, $arr_two,SORT_ASC);

print("<pre>");
print_r($arr_one);
print("</pre>");

print("<pre>");
print_r($arr_two);
print("</pre>");


?>