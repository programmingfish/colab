<?php
    $to = "arvid.dezittere@gmail.com";
    $subject = "New account login";
    $message = "Dear,\nthere is a new login on your account on the following ip adres: ERROR";
    $headers = "Login warning";
    mail($to,$subject,$message,$headers,"-f account.noreply@colab.org");
?>