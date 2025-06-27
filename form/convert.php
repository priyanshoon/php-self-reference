<?php
include "classes/converter.php";
?>
<html>

<head>
    <title>Documents</title>
</head>

<body>
    <h1>Conversion</h1>
    <?php

    var_dump($_SERVER);

    // super global vairable
    if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];

        $converter = new Converter($crypto);

        echo "<p>You want to convert $amount $crypto.</p>";
    } else {
        echo "<h2>Ops! it didn't work. Try again</h2>";
    }

    ?>
</body>

</html>
