<?php
    $to = "matiwojt@gmail.com";

    $email = $_POST['senderMail'];
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "Od: " . $email;

    if(isset($_POST['submit'])) {
        mail($to, $subject, $message, $headers);
        echo "<br>" . "Mail zostal wyslany!";
    }
?>