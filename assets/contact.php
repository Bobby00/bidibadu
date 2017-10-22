<?php

$name     = $_POST['name'];
$email    = $_POST['email'];
$subject   = $_POST['subject'];
$rooms   = $_POST['rooms'];
$message = $_POST['message'];

$email_from = 'bidibadubeachresort.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name. \n".
$email_message = "Here are the details :\n $name, $email, $subject, $rooms, $message"

$to = "edwarobert6@gmail.com";
$headers = "From: email_from \r \n";
//$address = "HERE your email address";
$address = "info@domain.com";
mail ($to,$email_subject,$email_body,$headers,$email_message);
