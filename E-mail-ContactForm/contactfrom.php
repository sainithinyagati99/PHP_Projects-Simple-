<?php

use http\Message;

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];

    $mailTo="YOUR MAIL:ID(Reciever Mail ID)";
    $headers="From: ".$mailFrom;
    $txt="You have recieved an email from ".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt,$headers);
    header("Locatoin: index.php?mailsend");
}