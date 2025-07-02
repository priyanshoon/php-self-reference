<?php

// $emails = file('file.txt', FILE_IGNORE_NEW_LINES);
//
$target = "pdp0w@gmail.com";

// foreach($emails as $email) {
//     // echo $email . "\n";
//     if ($email === $target) {
//         echo "found! $email \n";
//         trim($email);
//         break;
//     } else {
//         echo "not found!\n";
//     }
// }
//

$content = file_get_contents("file.txt");
$content = str_replace($target . "\n", '', "$content");
file_put_contents("file.txt", $content);
