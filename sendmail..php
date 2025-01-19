<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent injection attacks
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Email configuration
    $to = "runswellautomotive@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    // Email body
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again.";
    }
}
?>
