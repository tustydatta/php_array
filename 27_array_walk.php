<?php

function myfunction($department, $name){
    echo "$name comes from $department department <br
    >";
}

$name = array(
    "Akbor" => "Biology",
    "Mamun" => "Maths",
    "Delower" => "Physics"
);

array_walk($name, "myfunction");

?>