<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "your_db_name";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Checking connection for failures
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
