<?php

$name = array(
    array(
        'id' => '200',
        'first_name' => 'Abdullah',
        'last_name' => 'Mamun'
    ),
    array(
        'id' => '201',
        'first_name' => 'Akbor',
        'last_name' => 'Hosain'
    ),
    array(
        'id' => '202',
        'first_name' => 'Delower',
        'last_name' => 'Imran'
    )
);

$lastName = array_column($name, 'last_name', 'id');

print ("<pre>");
print_r($lastName);
print ("</pre>");

?>