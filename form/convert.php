<html>

<head>
    <title>Documents</title>
</head>

<body>
    <h1>Conversion</h1>
    <?php
    require_once "classes/CryptoConverter.php";

    // var_dump($_SERVER);

    // super global vairable
    if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
        $amount = $_POST["amount"];
        $crypto = $_POST["crypto"];
        $country = $_POST["country"];

        $converter = new CryptoConverter($crypto, $country);
        $result = $converter->convert($amount);

        echo "<p>You want to convert $amount $crypto.</p>";
        echo "<p>You have $country $result</p>";
    } else {
        echo "<h2>Ops! it didn't work. Try again</h2>";
    }

    ?>
</body>

</html>
