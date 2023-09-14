<?php

$name = array("Jamal", "Mamun", "Delower", "Akbor");

print("<pre>");
print_r($name);
print("</pre>");

echo "Current Value: " current($name) . "<br/>";
echo "Next Value: " next($name) . "<br/>";
echo "Last Value: " end($name) . "<br/>";

?>