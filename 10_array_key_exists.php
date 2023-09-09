<?php

$arr = array(
    "name" => "Tusty",
    "age" => "35"
);

if(array_key_exists("name", $arr)) {
    echo "key already exists.<br>";
} else{
    echo "key does not exists.<br>";
}

if(array_key_exists("namee", $arr)){
    echo "key already exists.<br>";
} else{
    echo "key does not exists.<br>";
}


$array = array("name", "age");

if (array_key_exists(0, $array)) {
    echo "key already exists.<br>";
} else{
    echo "key does not exists.<br>";
}

if (array_key_exists(2, $array)) {
    echo "key already exists.<br>";
} else{
    echo "key does not exists.<br>";
}


?>