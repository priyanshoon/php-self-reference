<?php

// $simple_code = (string)rand(10, 1000);
// echo gettype($simple_code);
// echo $simple_code;

// $code = "UN_123456";
// echo substr($code, 3);


// $lines = file('file.txt');
//
// $data = "pdp0w@pagluworld.com\n";
// file_put_contents('file.txt', $data);
//
// foreach ($lines as $line) {
//     echo $line;
// }

// reading file advance file io
// $handle = fopen('file.txt', 'a+');
// if ($handle) {
//     while (($line = fgets($handle)) != false) {
//         echo $line;
//     }
// }

// appending file advance file io
// fwrite($handle, "pdp0w@hotmail.com\n");

// if ($handle) {
//     while (($line = fgets($handle)) != false) {
//         echo $line;
//     }
// } 

// fclose($handle);

// ["pdp0w@google.com", "pdp0w@hotmail.com", "pdp0w@yahoo.com", "pdp0w@pagluworld.com"];
$emails = file('file.txt', FILE_IGNORE_NEW_LINES);

// 4
$originalCount = count($emails);
// echo $originalCount;

$email = "pdp0w@yahoo.com"; // wanna remove this shit

$emails = array_filter($emails, function($line) use ($email) {
    return trim($line) !== $email;
});


file_put_contents('file.txt', implode("\n", $emails) . "\n");

echo count($emails);

