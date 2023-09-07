<?php

$car = array("volvo", "BMW", "toyota");
echo $car[0];
echo "<br>";
echo $length = count($car);
echo "<br>";
for($i=0; $i<$length; $i++){
    echo $car[$i]."<br/>";
}

$age = array(
    "Abdullah" => "30",
    "Mamun" => "32",
    "Jamal" => "28",
    "Habib" => "25" 
);

foreach($age as $key => $value){
    echo "Name = ".$key.", Age = ".$value;
    echo "<br/>";
}

// multidaimantional array

$car1 = array(
    array("Volvo", "100", "90"),
    array("BMW", "40", "30"),
    array("Toyota", "120", "100")
);
echo $car1[0][2];
echo "<br>";
echo $car1[2][0];

?>