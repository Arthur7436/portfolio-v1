<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "arthur.thai479@gmail.com";
    $subject = "Here is the sample subject line";
    $message = $_SERVER["message"];
    $headers = "From: jane@janedoe.com";

    mail($to, $subject, $message, $headers);
}
