<?php

// $simple_code = (string)rand(10, 1000);
// echo gettype($simple_code);
// echo $simple_code;

// $code = "UN_123456";
// echo substr($code, 3);


$lines = file('file.txt');
foreach ($lines as $line) {
    echo $line;
}
