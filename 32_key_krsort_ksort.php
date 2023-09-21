<?php

$coder = array("Delowar", "Mamun", "Akbor", "Kader");
echo "The current position key is: " .key($coder) . "<br/>";
next($coder);
echo "The current position key is: " .key($coder) . "<br/>";

echo "<hr>";

$name = array(
    "Delower" => "30",
    "Akbor" => "35",
    "Mamun" => "33"
);

krsort($name);

foreach($name as $key=> $value) {
    echo "Name: " . $key . ", Age: ". $value . "<br/>";
}

echo "<hr>";

ksort($name);

foreach($name as $key => $value) {
    echo "Name: " . $key . ", Age: " . $value . "<br/>";
}

?>