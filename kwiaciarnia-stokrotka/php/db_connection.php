<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "florist_shop_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Checking connection for failures
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>