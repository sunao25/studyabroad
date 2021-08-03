<?php
$name = $_POS['name'];
$visitor_email = $_POS['email'];
$subject = $_POS['subject'];
$message = $_POS['message'];


$email_from = 'info@yourwebsite.com';

$email_subject = 'New From Submission';

$email_bidy = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                 "User Message: $message.\n";



$to = 'sunaosoccer7070@gmail.com';


$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>