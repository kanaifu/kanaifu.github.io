<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email recipient (your email address)
    $to = "mt102@rice.edu";

    // Email subject
    $subject = "Contact Form Submission from $name";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Headers
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for your message. We'll be in touch shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
