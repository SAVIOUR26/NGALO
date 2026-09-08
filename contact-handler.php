<?php
/**
 * Processes the home page contact form and emails the enquiry to the
 * business inbox. Redirects back to the contact section with a status flag.
 *
 * Sends via authenticated SMTP (PHPMailer) when includes/mail-config.php
 * is present, since that's what actually gets delivered reliably. Falls
 * back to PHP's built-in mail() otherwise — see includes/mail-config.example.php
 * for how to set up SMTP.
 */
require_once __DIR__ . '/includes/config.php';

use PHPMailer\PHPMailer\Exception as PHPMailerException;
use PHPMailer\PHPMailer\PHPMailer;

function redirect_with_status($status) {
    header('Location: /?contact=' . $status . '#contact');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_with_status('error');
}

// Honeypot field — real visitors never fill this in.
if (!empty($_POST['company'])) {
    redirect_with_status('success');
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? 'General Enquiry');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect_with_status('error');
}

$to           = CONTACT_EMAIL;
$mail_subject = 'New Website Enquiry: ' . $subject;

$body  = "You have a new enquiry from the Ngalo website:\n\n";
$body .= "Name: {$name}\n";
$body .= "Phone: " . ($phone !== '' ? $phone : 'Not provided') . "\n";
$body .= "Email: {$email}\n";
$body .= "Subject: {$subject}\n\n";
$body .= "Message:\n{$message}\n";

$mail_config_file = __DIR__ . '/includes/mail-config.php';
$sent = false;

if (file_exists($mail_config_file)) {
    require_once __DIR__ . '/includes/PHPMailer/Exception.php';
    require_once __DIR__ . '/includes/PHPMailer/PHPMailer.php';
    require_once __DIR__ . '/includes/PHPMailer/SMTP.php';

    $cfg = require $mail_config_file;

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $cfg['host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $cfg['username'];
        $mail->Password   = $cfg['password'];
        $mail->SMTPSecure = $cfg['encryption'];
        $mail->Port       = $cfg['port'];

        $mail->setFrom($cfg['from_email'], $cfg['from_name']);
        $mail->addAddress($to);
        $mail->addReplyTo($email, $name);

        $mail->Subject = $mail_subject;
        $mail->Body    = $body;

        $sent = $mail->send();
    } catch (PHPMailerException $e) {
        $sent = false;
    }
} else {
    // No SMTP configured yet — fall back to the server's built-in mailer.
    $headers = [
        'From: ' . SITE_NAME . ' Website <no-reply@ngalogroup.com>',
        'Reply-To: ' . $email,
        'X-Mailer: PHP/' . phpversion(),
    ];
    $sent = @mail($to, $mail_subject, $body, implode("\r\n", $headers));
}

redirect_with_status($sent ? 'success' : 'error');
