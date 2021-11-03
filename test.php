<?php

$array = array(30, 15, 5, 20, -20, -1, 10, -5, 3, 2);
$result = null;

foreach ($array as $value) {
    if ($result === null || abs($value) <= abs($result)) {
        $result = $value;
    }
};

echo (count($array) === 0 ? '0' : $result);
