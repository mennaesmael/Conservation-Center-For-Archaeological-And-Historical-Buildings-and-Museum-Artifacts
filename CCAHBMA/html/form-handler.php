<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'menaesmaels@gmail.com';

$email_subject = 'new form submission';

$email_body = "user name : $name./n" .
            "user email :$visitor_email./n" .
            "subject :$subject./n" .
            "message :$message./n"; 


            $to = 'mohamedesmaelsalah@gmail.com';

            $headers = "from : $email_from \r\n";
            $headers .= "reply-to : $visitor_email \r\n";

            mail($to,$email_subject,$email_body,$headers);
            header("Location: contact.html");
           
?>