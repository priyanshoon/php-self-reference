<?php
// what is a session?
// Used to manage information across different pages 

session_start();
$_SESSION['username'] = "priyanshoon";
$_SESSION['favCat'] = "books";

echo "we have saved your session\n";

?>
