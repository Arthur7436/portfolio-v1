<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "arthur.thai479@gmail.com";
    $subject = "Here is the sample subject line";
    $message = $_POST["message"];
    $headers = "From: jane@janedoe.com";

    mail($to, $subject, $message, $headers);
}
