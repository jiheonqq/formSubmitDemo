<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject']
    $message = $_POST['message'];

    $mailheader = "From:" .$name. "<" .$email. ">\r\n";

    // Email address where you want to receive the messages
    $recipient = "replysmas@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission";

    mail($recipient, $subject, $message, $mailheader)
    or die("Error!")
    echo"Message sent!";

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Redirect back to the contact form if accessed directly
    header("Location: index.html");
    exit;
}
?>
