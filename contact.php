<?php

if($_POST["submit"]) {
    $recipient="gupta.saksham98@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["gupta.saksham98@gmail.com"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

?>