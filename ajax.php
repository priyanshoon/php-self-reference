<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["name"])) {
    // AJAX request handler
    $name = htmlspecialchars($_POST["name"]);
    echo "Hello, $name!";
    exit; // Stop further rendering
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AJAX in Single PHP File</title>
    <script>
        function sendName() {
            const name = document.getElementById("name").value;
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "", true); // Send request to the same file
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            /*
                Ready State:
                - 0: Connection created but not opened
                - 1: Connection opened
                - 2: Request sent, received by server
                - 3: Response in progress (partial data)
                - 4: Response complete (success or failure)
                

                onreadystatechange -> call each and every time readyState
            */
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };

            xhr.send("name=" + encodeURIComponent(name));
        }
    </script>
</head>
<body>
    <h2>Enter your name:</h2>
    <input type="text" id="name">
    <button onclick="sendName()">Submit</button>

    <div id="result" style="margin-top: 10px;"></div>
</body>
</html>

