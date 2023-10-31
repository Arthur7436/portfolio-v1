<?php
if ($_POST["message"]) {
    mail("arthur.thai479@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
