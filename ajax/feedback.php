<?php
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    if ($name == '' || $email == '' || $subject == '' || $message == '') {
        echo 'Please, input data';
        exit;
    }
    //Sending
    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    if (mail("tore.smile.01@gmail.com", $subject, $message, $headers))
    echo "Message was send";
    else
        echo "Message was not send";
?>