<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Set up the mailer
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nhaznanding@gmail.com';  // Replace with your email
        $mail->Password = 'mmcn vcpu hjwx ssfs';  // Your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and recipient info
        $mail->setFrom($email, $name);  // From the email submitted by the user
        $mail->addAddress('nazlahnanding13@example.com');  // Recipient email (where the message will be sent)

        // Email subject and body
        $mail->Subject = 'New Message from ' . $name;
        $mail->Body = "You have received a new message from:\n\nName: $name\nEmail: $email\n\nMessage:\n$message";

        // Send the email
        if ($mail->send()) {
            echo '<div class="success-message">Message has been sent successfully!</div>';
        } else {
            echo '<div class="error-message">Mailer Error: ' . $mail->ErrorInfo . '</div>';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
