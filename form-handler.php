<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];


$email_from = 'susktr@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "user Name: $name.\n".
               "user Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "user Message: $message.\n";



$to = 'susktr@gmail.com';

$headers = "Form: $email_form \r\n";

$header .= "Reply-to: $visitor_email \r\n";


mail($to,$email_subject,$email_bod,$headers);



header("Location: contact.html");




?>