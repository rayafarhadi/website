<?php

$errors="";

$mailTo = "info@rayafarhadi.com";
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($mailFrom) || empty($message)){
    $errors .= "\n Please enter all required fields.";
}

if(empty($errors)){
    $body = "Email from my website: \n\n".$message;
    $headers = "From: ".$mailFrom;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: thank-you.html");
}

?>
