<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['subject'];
$message = $_POST['message'];


$email_from = '';

$email_subject = 'New Form Submission';

$email_body= "User Name: $name.\n".
                "User Email: $visitor_emails.\n".
                "Subject: $subject.\n".
                "phone: $phone.\n".
                "User message: $message.\n";

$to: = '';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: ./sections/book_now.html");
?>

