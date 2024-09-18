<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files manually
require 'C:/xampp/htdocs/myproject/PHPMailer/src/Exception.php';
require 'C:/xampp/htdocs/myproject/PHPMailer/src/PHPMailer.php';
require 'C:/xampp/htdocs/myproject/PHPMailer/src/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                      // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                 // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'klassiquehonour@gmail.com';           // SMTP username
    $mail->Password   = 'Klassiqueme1';            // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption
    $mail->Port       = 587;                              // TCP port to connect to

    // Recipients
    $mail->setFrom('your-email@gmail.com', 'Your Name');
    $mail->addAddress('klassiquehonour@gmail.com', 'Recipient Name'); // Add recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body';      // HTML message body
    $mail->AltBody = 'This is the plain text message body'; // Plain text for non-HTML clients

    // Send email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
