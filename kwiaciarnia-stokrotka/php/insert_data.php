<?php
    $servername = "localhost";
    $username = "mateusz.wojtowicz4";
    $password = "myBKIVFsql";
    $dbname = "mateusz.wojtowicz4";

    $marka = $_POST["marka"];
    $model = $_POST["model"];
    $kolor = $_POST["kolor"];
    $pojemnosc_silnika = $_POST["pojemnosc_silnika"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO samochody (marka, model, kolor, pojemnosc_silnika)
            VALUES ('$marka', '$model', '$kolor', $pojemnosc_silnika)";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully\n";
        echo "<br>" . "Edytowano: " . date(DATE_RFC2822);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);    
?>