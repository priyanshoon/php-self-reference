<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Crypto Masters</h1>

    <form action="convert.php" method="POST">
        <label for="amount">Amount</label>
        <input id="amount" name="amount">
        <label for="crypto">Crypto Currency</label>
        <select id="crypto" name="crypto">
            <option>BTC</option>
            <option>ETH</option>
        </select>
        <select id="country" name="country">
            <option>INR</option>
            <option>USD</option>
        </select>
        <button type="submit"> Convert </button>
    </form>
</body>

</html>
