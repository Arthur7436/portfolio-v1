<?php

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if ($_SERVER["REQUEST_METHOD"] == "get") {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];
    mail("arthur.thai479@gmail.com", "New message from $name", $message, "From: $email", implode("\r\n", $headers));
}

?>