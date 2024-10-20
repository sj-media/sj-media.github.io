<?php
// Define the recipient email address
$to = "sj@sjmedia.xyz"; // Replace with your email address

// Collect form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// Validate that fields are not empty
if (!empty($name) && !empty($email) && !empty($message)) {
    
    // Subject of the email
    $subject = "New Query from Contact Form";

    // Email content
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // If the mail was successfully sent, redirect to a thank-you page or display a success message
        echo "Thank you! Your message has been sent.";
    } else {
        // If the mail failed, display an error message
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    // If fields are missing, display an error message
    echo "Please fill in all fields.";
}
?>
