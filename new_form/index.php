<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "<h2>Welcome, " . htmlspecialchars($name) . "</h2>";
    echo "<h2>You email is : " . htmlspecialchars($email) . "</h2>";
    echo rand(100000, 999999);
} else {
?>

    <form method="POST" action="">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <input type="submit" value="Submit">
    </form>
<?php
}
