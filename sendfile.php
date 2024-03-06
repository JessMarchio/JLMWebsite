<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient Email Address
    $to = 'jessiemarchio@gmail.com';

    // Email Subject
    $email_subject = 'Personal Website Submission';

    // Email Content
    $email_body = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    // Email Headers
    $headers = "From: $email";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);

    // Redirect back to the original page
    header('Location: index.html');
    exit;
}
?>
