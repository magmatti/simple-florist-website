<?php
    error_reporting(0);

    $servername = "localhost";
    $username = "mateusz.wojtowicz4";
    $password = "myBKIVFsql";
    $dbname = "mateusz.wojtowicz4";

    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $message = $_POST["message"];
    $ocena = $_POST["ocena"];
    $data = date("Y-m-d H:i:s");

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO komentarze2 (imie, nazwisko, komentarz, ocena, data)
            VALUES ('$imie', '$nazwisko', '$message', $ocena, '$data')";

    if (mysqli_query($conn, $sql)) {
        echo "Dziękujemy za opinie!\n";
        // echo "<br>" . "Edytowano: " . date(DATE_RFC2822);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);    
?>