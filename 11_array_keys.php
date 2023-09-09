<?php

$car = array(
    "Volvo" => "xc90",
    "BMW" => "x5",
    "Toyota" => "highlander"
);

$result = array_keys($car);
$result1 = array_keys($car, "x5");
print("<pre>");
print_r($result);
print_r($result1);
print("</pre>");

?>