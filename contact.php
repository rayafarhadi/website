<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "raya.farhadi@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Email from my website: \n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
}