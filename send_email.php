<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Set your email address where you want to receive the form submissions
    $to = "japeshraddha24@gmail.com";
    
    // Subject and email body
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from your website contact form.\n\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Subject: $subject\n".
                  "Message:\n$message";
    
    // Headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";
    
    // Send email
    mail($to, $email_subject, $email_body, $headers);
    echo "Thank you! Your message has been sent.";
} else {
    // If it's not a POST request, redirect back to the contact page or display an error message
    echo "Error: Method not allowed";
}
?>
