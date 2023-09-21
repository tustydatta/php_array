<?php

$coder = array("Delower", "Mamun", "Akbor", "kader");

if(isset($_POST['username'])){
    $text = $_POST['username'];

    if(in_array($text, $coder)){
        echo "$text Exist.";
    } else {
        echo "$text Not Exist!!";
    }
}

?>

<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" value="Submit">
</form>