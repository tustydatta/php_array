<?php

$color_one = array(
    "a" => "red", 
    "b" => "green",
    "c" => "blue", 
    "d" => "yellow"
);
if(isset($_POST['text'])){
    global $txt;
    $txt = $_POST['text'];
    $result = array_search($txt, $color_one);
    echo "You have searched by -> $txt and your key is -> $result";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="20_array_search.php" method="post">
        <input type="text" name="text" value="<?php global $txt; echo $txt; ?>">
        <input type="submit" value="Submit">
    </form>
</body>
</html>