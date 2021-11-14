<?php

$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'techsushant@web.com';

$email_subject = 'New Form Submission'

$email_body = "User Name : $name. \n".
                "User Email : $visitor_email. \n".
                "User Subject : $subject. \n".
                "User Message : $message. \n";

$to = 'sushantjadhav028@gmail.com';

$headers = "From: $email_from \r \n" ;

$headers . = "Reply to: $visitor_email \r \n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");





?>