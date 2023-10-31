<?php
if ($_POST["POST"]) {
    mail(
        "arthur.thai479@gmail.com",
        "Here is the sample subject line",
        $_POST["Insert Your Message"] . "From: jane@janedoe.com"
    );
}
?>