<?php
if($_POST["message"]) {
    mail("gupta.saksham98@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>