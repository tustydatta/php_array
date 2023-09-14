<?php

$color_one = array("red", "green", "blue",  "yellow", "skyblue");

$result = array_slice($color_one, 2);

print("<pre>");
print_r($result);
print("</pre>");

$ans = array_slice($color_one, 1, 3);

print("<pre>");
print_r($ans);
print("</pre>");

?>