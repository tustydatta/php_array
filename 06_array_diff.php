 <?php

$array_one = array(
    "a" => "red",
    "b" => "green",
    "c" => "blue",
    "d" => "yellow"
);

$array_two = array(
    "e" => "red",
    "f" => "black",
    "g" => "purple"
);

$array_three = array(
    "a" => "red",
    "b" => "black",
    "h" => "yellow"
);

$differ = array_diff($array_one, $array_two, $array_three);

print("<pre>");
print_r($differ);
print("</pre>");

?>