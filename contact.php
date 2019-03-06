<?php

if (isset($_POST ['submit'])){

    $name = $_POST['name'];
    $name = $_POST['mail'];
    $mailFrom = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "mgutierrez13@email.davenport.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved a message from: ".$name.".\n\n".$message;

    mail ($mailTo, $subject, $txt, $headers);

    header ("Location: index.php?mailsend");
}