<?php

$name = array(
    "Jaman" => 35,
    "Kader" => 33,
    "Mamun" => 25,
    "Akbor" => 23,
    "Akbor" => 230
);
// echo array_change_key_case($name, CASE_UPPER);
print("<pre>");
print_r(array_change_key_case($name, CASE_LOWER));
print_r(array_change_key_case($name, CASE_UPPER));
print("<pre/>")
?>