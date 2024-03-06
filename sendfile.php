<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form submission contains a honeypot field
    if (!empty($_POST['honeypot'])) {
        // If the honeypot field is not empty, it's likely a spam submission
        // You can log this or take appropriate action, such as silently discarding the submission
        exit; // Exit the script without processing the form submission further
    }

    // Sanitize input data to prevent email injection and other attacks
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Invalid email format, reject the submission
        echo "Invalid email address.";
        exit;
    }

    // Recipient Email Address
    $to = 'jessiemarchio@gmail.com';

    // Email Subject
    $email_subject = 'Personal Website Submission';

    // Email Content
    $email_body = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    // Email Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        // Email sending failed
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    // If not a POST request, redirect back to the original page
    header('Location: index.html');
    exit;
}
?>
