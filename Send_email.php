<?php
if (_SERVER["REQUEST_METHOD"] == "POST")

// Collect form dataemail = _POST['email'];subject = _POST['subject'];message = _POST['message'];

    // Set the recipient's email address (Gmail address)to = "your-email@gmail.com";  // Replace with your Gmail address

    // Set the email headers
    headers = "From: " .email . "\r\n";
    headers .= "Reply-To: " .email . "\r\n";
    headers .= "Content-Type: text/html; charset=UTF-8";

    // Send the email using mail() function
    if (mail(to, subject,message, headers)) 
        echo "Email sent successfully!";
     else 
        echo "Failed to send email.";
    
?>
