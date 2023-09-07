<?php

$name = array("Akbor", "Mamun", "Delowar");
$depertment = array("Computer", "Maths", "Physics");
$age = array("28", "29", "30");

$combine = array_combine($name, $depertment);
$com = array_combine($name, $age);

print("<pre>");
print_r($combine);
print_r($com);
print("<pre>");
?>