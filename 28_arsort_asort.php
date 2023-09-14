<?php

$num = array(
    "Akbor" => "35",
    "Mamun" => "40",
    "Delowar" => "30",
    "Hasan" => "28"
);

arsort($num);
foreach($num as $name => $age){
    echo "Name: ". $name . ", Age: " . $age . "<br>";
}

echo "<br/><hr/>";

asort($num);
foreach($num as $name => $age){
    echo "Name: ".$name.", Age: ".$age."<br/>";
}

?>